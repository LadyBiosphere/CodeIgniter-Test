<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	// Index method runs automatically if no other method is called
	public function index() {

		// Form helper
		$this->load->helper('form');

		// Rules for validation: set rule for username.
		// Arguement 1 = name for form element
		// Arguement 2 = part of error message
		// Arguement 3 = list of validation steps, seperated by 'pipes', i.e. "|"
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[40]|is_unique[users.Username]|alpha_dash');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[60]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[8]|max_length[60]|matches[password]');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|validate_email');

		// Get page data
		$pageData = $this->page->getPageData('registration');

		// Header HTML
		$this->load->view('templates/header', $pageData);

		// Registration content
		$this->load->view('registration');

		// Footer HTML
		$this->load->view('templates/footer');


	}

	// Method runs when the registration form is submitted
	public function doRegistration() {

		// THis library helps with the validation of the form
		$this->load->library('form_validation');

		// Run the validation process. 
		// IF false, then validation failed
		if ($this->form_validation->run() == FALSE){
			// Shoe registration form again
			$this->load->view('registration');
		}
		else {
			//$this->load->view('formsuccess');
			echo 'success';
		}

	}

}
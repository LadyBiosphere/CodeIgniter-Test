<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	// Index method runs automatically if no other method is called
	public function index() {

		// Form helper
		$this->load->helper('form');

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

		// Rules for validation: set rule for username.
		// Arguement 1 = name for form element
		// Arguement 2 = part of error message
		// Arguement 3 = list of validation steps, seperated by 'pipes', i.e. "|"
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.Username]');

		// Run the validation process. 
		// IF false, then validation failed
		if ($this->form_validation->run() == FALSE)
		{
			// Shoe registration form again
			$this->load->view('registration');
		}
		else
		{
			//$this->load->view('formsuccess');
			echo 'success';
		}

	}

}
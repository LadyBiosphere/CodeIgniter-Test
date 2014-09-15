<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	// Index method runs automatically if no other method is called
	public function index(){

		// Data for header
		$dataForHeader['title'] = 'About page title';
		$dataForHeader['meta_desc'] = 'Everything that describes the about page goes here';

		// Header
		$this->load->view('templates/header', $dataForHeader);

		// Home content
		$this->load->view('about');

		// Footer
		$this->load->view('templates/footer');
	}
}

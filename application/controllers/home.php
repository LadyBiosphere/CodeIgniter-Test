<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	// Index method runs automatically if no other method is called
	public function index(){

		// This is important for URLs, e.g. nav
		// $this->load->helper('url');

		// Load page model
		// $this->load->model('page');

		// Get page data
		$pageData = $this->page->getPageData('home');

		// Data for header
		// $dataForHeader['title'] = 'Home page title';
		// $dataForHeader['meta_desc'] = 'Everything that describes the homepage goes here';

		// Header
		$this->load->view('templates/header', $pageData);

		// Home content
		$this->load->view('home');

		// Footer
		$this->load->view('templates/footer');
	}
}

<?php

class Registration_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function registerAccount(){
    	$this->load->view('registrtion');
    } else {
    	// Load the model
    	$this->load->model('Registration_Model');

    	// Do registration
    	$this->Registration_Model->registerAccount();

    	// this->load->view('formsuccess');
    	echo 'success';
    }

    function registerAccount(){
    	// Prep data for database
    	$data = [
	    		'Username'=>$this->input->post('username'),
	    		'Password'=>$this->input->post('password'),
	    		'Email'=>$this->input->post('email')
    		];

    		// Insert into db
    		$this->db->insert('users', $data);
    }
}
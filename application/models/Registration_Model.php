<?php

class Registration_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function registerAccount() {

    	// Prepare data for database
    	$data = [
    		'Username' 	=> $this->input->post('username'),
    		'Password' 	=> $this->input->post('password'),
    		'Email'		=> $this->input->post('email')
    	];

    	// Insert into DB
    	$this->db->insert('users', $data);

    }
}
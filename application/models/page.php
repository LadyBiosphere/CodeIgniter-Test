<?php

	class Page extends CI_Model {

		// Constructor is optional. It is only needed when
		// you want to load a resource globally
	    function __construct()
	    {
	    	// Required. Without it, the parent model class is destroyed
	        parent::__construct();

	        // Connect to the database
	         $this->load->database();
	    }

	    // Function to get page data
	    public function getPageData($pageData){

	    	// Select from table were Page_Name = $pageName
	    	// Get, where:
	    	// Arguement 1 = name of table
	    	// Arguement 2 = array with keys as column names and values as value 
	    	// to look for

	    	 $query = $this->db->get_where('pages', ['Page_Name'=>'$pageName']);

	    	 // Return the result as an assoc
	    	 return $query->row_array();
	}

}
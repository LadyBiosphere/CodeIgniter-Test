<?php

	class Page extends CI_Model {

	    function __construct()
	    {
	        parent::__construct();

	        // Connect to the database
	         $this->load->database();
	    }

	    // Function to get page data
	    public function getPageData($pageData){

	    	 // Select from table were Page_Name = $pageName
	    	 $query = $this->db->get_where('pages', ['Page_Name'=>'$pageName']);

	    	 // Return the result as an assoc
	    	 return $query->row_array();
	}

}
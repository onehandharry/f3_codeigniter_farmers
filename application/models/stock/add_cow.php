<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_cow extends CI_Model {

	function add_a_cow($cow_name, $owner) 
	{	
		parent::__construct();	 // Call the Model constructor
		$this->load->database(); //loads database

		
		$data = array(
		   'cow_name' => $cow_name,
		   'cow_owner' => $owner
        );

		$this->db->insert('farmer_stock', $data); 


	}

}

?>
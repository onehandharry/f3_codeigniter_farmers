<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Farmer_list extends CI_Model {

	function get_farmers ($per_pg,$offset) 
	{
		parent::__construct();	
		$this->load->database(); //loads database
		$query = $this->db->get('farmer_info',$per_pg,$offset); //active record
		
		return $query->result_array();
	}

}

?>
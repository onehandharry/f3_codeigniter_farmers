<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cow_list extends CI_Model {

	function get_cows ($per_pg,$offset,$farmer) 
	{
		parent::__construct();	
		$this->load->database(); //loads database
		$query = $this->db->get_where('farmer_stock', array('cow_owner' => $farmer),$per_pg,$offset); //active record
		return $query->result_array();
	}

}

?>
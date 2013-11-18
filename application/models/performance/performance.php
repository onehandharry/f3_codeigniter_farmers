<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_performance extends CI_Model {

	function get_performance() 
	{

	parent::__construct();	
	$this->load->database(); //loads database
	$data = array();

	$id = 1;
	$items = $_POST;
	$todaysDate = date('d-m-y');

	//$query = $this->db->get_where('farmer_stock', array('cow_owner' => $id));
	$query = $this->db->order_by('cow_name', 'ASC')->$this->db->get_where('farmer_stock', array('cow_owner' => $id));
	
	if ($query->num_rows() > 0)
{
return $query->result();
}




	}

}

?>
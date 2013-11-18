<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class list_stock_singular extends CI_Model {

	function get_all_singular() 
	{

		parent::__construct();	
		$this->load->database(); //loads database
		$farmer = $this->input->post('farmer');
		if(!$farmer){$farmer = 1;};
		$query = $this->db->get_where('farmer_stock', array('cow_owner' => $farmer));
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

	}

}

?>
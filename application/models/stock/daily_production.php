<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class daily_production extends CI_Model {

	function daily_production () 
	{

	parent::__construct();	
	$this->load->database(); //loads database
	$data = array();

	
	$items = $_POST;
	$todaysDate = date('y-m-d');

    foreach ($items as $key => $value)
    {
		$data[] = array(
			'cow_id'  =>  $key,
			'output'  =>  $value,
			'date'  =>  $todaysDate		
		);
    }

        $this->db->insert_batch('production', $data); 


	}

}

?>
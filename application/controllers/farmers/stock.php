<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function index()
	{
	
	$farmer = $this->input->post('farmer');
	$dataGo =	array('farmer' => $farmer, 'farmer_id' => $farmer);
	
	
	//$farmer = $this->input->post('farmer');
	if(!$farmer){
	
	echo 'no farmer chosen';
	exit();
	}

		$this->load->view('header');
		$this->load->view('stock/add', $dataGo);  
		$this->load->view('footer');	
		
	}
	
}

?>
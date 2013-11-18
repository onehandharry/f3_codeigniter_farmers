<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

	public function index()
	{

		$cow_name = $this->input->post('name'); 
		$owner = $this->input->post('owner');		
		$this->load->model('stock/add_cow'););	
		$this->add_cow->add_a_cow($cow_name, $owner);
		
	}
	
}

/* End of file add.php */
/* Location: ./application/controllers/add.php */
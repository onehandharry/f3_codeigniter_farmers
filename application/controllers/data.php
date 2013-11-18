<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');	

		$this->form_validation->set_rules('Firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('Surname', 'Surname', 'required');
		$this->form_validation->set_rules('County', 'County', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('farmers/add_farmer');
		}
		else
		{

			$farmer = array('Firstname' => $this->input->post('Firstname'),
							'Surname' => $this->input->post('Surname'),
							'County' => $this->input->post('County'));
	
		
			$this->load->model('farmers/insert_farmer');
			$this->load->view('farmers/added_farmer', $farmer);			
		}
	
		$this->load->view('footer');			
	}

	
}

/* End of file data.php */
/* Location: ./application/controllers/data.php */
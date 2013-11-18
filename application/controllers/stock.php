<?php 

class Stock extends CI_Controller {

	public function index()
	{
		$this->load->view('header');	

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('cow_id', 'required|alpha_numeric|max_length[10]'); 
        $this->form_validation->set_rules('cow_production', 'Numer telefonu', 'required|alpha_numeric|max_length[10]'); 

		//if validaation is false
		if ($this->form_validation->run() == FALSE)
		{
		
		//$production = $this->input->post();
			//$this->load->view('stock/cow');
		$this->load->model('stock/daily_production'); 
		$this->load->view('stock/updated'); 

		}
		else
		{

			echo 'error';
			
		}
		
		$this->load->view('footer');			
	}

	
}


/* End of file stock.php */
/* Location: ./application/controllers/stock.php */
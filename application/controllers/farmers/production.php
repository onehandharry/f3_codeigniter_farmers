<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Production extends CI_Controller {

	public function index()
	{
	
		$farmer = $this->input->post('farmer');


	    ////////////////////PAGINATION//////////////////
		$data['base']=$this->config->item('base_url');	
		$total=12;//$this->cow_list->farmer_count();		
        $per_pg=25; //how many results per page
        $offset=$this->uri->segment(3); //segment to get number of page
		
		$this->load->library('pagination');
		$config['base_url'] = $data["base"].'/production/index';
		$config['total_rows'] = $total;
		$config['per_page'] = $per_pg;
		
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
		
        $config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';     
        $config['cur_tag_open'] = "<li><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config); 
	
		$dataGo['pagination'] = $this->pagination->create_links();		//pass the links to variable for view
		
		//////////////END PAGINATION $per_pg ||| $offset variables available ////////////
		
		$this->load->model('stock/cow_list'); 
		$dataGo['result'] = $this->cow_list->get_cows($per_pg,$offset, $farmer);
		

		$this->load->view('header');
		$this->load->view('stock/cow', $dataGo);  
		$this->load->view('footer');	
		
	}

	
}

/* End of file production.php */
/* Location: ./application/controllers/farmers/production.php */

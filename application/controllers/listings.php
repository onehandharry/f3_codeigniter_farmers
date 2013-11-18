<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listings extends CI_Controller {

	public function index()
	{

		$this->load->model('farmers/farmer_list'); 
	
	    ////////////////////PAGINATION//////////////////
		$data['base']=$this->config->item('base_url');	
		$total=20;//$this->farmer_list->farmer_count();		
        $per_pg=10; //how many results per page
        $offset=$this->uri->segment(3); //segment to get number of page
		
		$this->load->library('pagination');
		$config['base_url'] = $data["base"].'/listings/index';
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
		
		//$this->load->model('farmers/farmer_list'); 
		$dataGo['result'] = $this->farmer_list->get_farmers($per_pg,$offset);

		$this->load->view('header');
		$this->load->view('farmers/farmer_list', $dataGo);  
		$this->load->view('footer');	
		
	}

	
}

/* End of file listings.php */
/* Location: ./application/controllers/listings.php */
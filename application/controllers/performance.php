<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Performance extends CI_Controller {

	public function index()
	{
		
		$view_type = $this->input->post('data'); //get the data wanted by user
		$view['view_type'] = $view_type; //get the data wanted by user to pass to view
		if(!$view_type){$view_type = 'combined_output';}; //if not set then default is combined output
		
		$this->load->model('performance/list_performance');  

		$dataGo['result'] = $this->list_performance->get_performance($view_type);

		$this->load->view('header');
		$this->load->view('performance/performance_selector', $view);	
		
		$title = array();
                  

		if($view_type == 'avg_output'){
		$title['title'] = 'Average Output';
		}elseif($view_type == 'combined_output'){
		$title['title']  = 'Combined Output for the week';		
		}elseif($view_type == 'top_cow'){
		$title['title']  = 'Top performing cows - Average daily output';		
		}

		if($view_type == 'avg_output' || $view_type == 'combined_output'){ //load farmer list view
		
		
			$this->load->view('performance/performance', $dataGo, $view_type, $title);  		
		
		}else{ //view for cow list
		
			$this->load->view('performance/performance_cows', $dataGo, $view_type, $title);  	
			
		}

		$this->load->view('footer');	
		
	}
	
}


/* End of file performance.php */
/* Location: ./application/controllers/performance.php */
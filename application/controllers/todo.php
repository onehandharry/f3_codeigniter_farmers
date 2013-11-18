<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function index()
	{
		$this->load->view('header');	
		$this->load->view('todo');
		$this->load->view('footer');			
	}

	
}

/* End of file todo.php */
/* Location: ./application/controllers/todo.php */
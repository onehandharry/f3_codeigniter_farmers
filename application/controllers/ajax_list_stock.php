<?php 

class Ajax_list_stock extends CI_Controller {

	public function index()
	{	
		$this->load->model('stock/list_stock_singular');	
		echo json_encode( $this->list_stock_singular->get_all_singular() ); //turns query result into json	
	}
	
}

/* End of file ajax_list_stock.php */
/* Location: ./application/controllers/ajax_list_stock.php */
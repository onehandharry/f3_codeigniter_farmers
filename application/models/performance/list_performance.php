<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_performance extends CI_Model {

	function get_performance($type) 
	{

	parent::__construct();	
	$this->load->database(); //loads database


	if($type == 'avg_output') {
		
		$sql = 'SELECT avg(aa.output) as output, aa.cow_owner, aa.firstname, aa.surname FROM 
				(SELECT sum(production.output) AS output, production.date,  farmer_stock.cow_owner, farmer_info.firstname, farmer_info.surname 
					FROM production
					LEFT JOIN farmer_stock ON production.cow_id = farmer_stock.id 
					LEFT JOIN farmer_info ON farmer_stock.cow_owner = farmer_info.id
					GROUP BY farmer_stock.cow_owner, production.date) as aa
					GROUP BY aa.cow_owner
					ORDER BY output DESC
					LIMIT 10';

        $query  = $this->db->query($sql);
	
		if ($query->num_rows() > 0)
		{				
			return $query->result_array();
		}
		
	}elseif($type == 'combined_output'){

	
		$this->db->select('SUM(production.output) AS output, farmer_stock.cow_owner, farmer_info.firstname, farmer_info.surname');
		$this->db->from('production');
		$this->db->join('farmer_stock', 'production.cow_id = farmer_stock.id');
		$this->db->join('farmer_info', 'farmer_stock.cow_owner = farmer_info.id');	
		$this->db->where('production.date > DATE_SUB(NOW(), INTERVAL 7 DAY) ');		
		$this->db->group_by('farmer_stock.cow_owner');
		$this->db->order_by('output', 'desc');		
		$this->db->limit('10');			
		
		$query=$this->db->get();
	
		if ($query->num_rows() > 0)
		{		
			return $query->result_array();
		}
	
	
	}elseif($type == 'top_cows'){
	
		$this->db->select('SUM(output) as output, cow_id, cow_name, date, farmer_info.firstname, farmer_info.surname');
		$this->db->from('production');
		$this->db->join('farmer_stock', 'production.cow_id = farmer_stock.id');
		$this->db->join('farmer_info', 'farmer_stock.id = farmer_info.id');		
		$this->db->group_by('cow_id');
		$this->db->order_by('output', 'desc');	
		$this->db->limit('5');			
		$query=$this->db->get();
	
		if ($query->num_rows() > 0)
		{		
			return $query->result_array();
		}	
	
	}

	//return $type;


	}

}

?>
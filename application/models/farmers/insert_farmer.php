<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_farmer extends CI_Controller {

public function __construct() {  
    parent::__construct();
	

$firstname = $this->input->post('Firstname');
$surname = $this->input->post('Surname');
$county = $this->input->post('County');	


$this->load->database();
$sql = "INSERT INTO farmer_info (`firstname`, `surname`, `county`) VALUES (?, ?, ?)"; 
$this->db->query($sql, array($firstname, $surname, $county));

}

}

?>
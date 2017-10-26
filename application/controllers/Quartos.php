<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quartos extends CI_Controller {

	public function index()
	{
        $result = $this->db->get('exemplo')->result();
        $data = array('exemplos'=>$result);
		$this->parser->parse('quartos/listing',$data);
	}
  
	public function insert()
	{
		$this->load->view('quartos/listing');
	}
  
}

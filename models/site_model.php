<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function run_my_query()
	{
		return " this message form model page";
	}
    public function insert_table_data($data){
		// $this->db->insert("tbl_usr",$data);  //Active contol 
		return $this->db->query("Insert into tbl_usr(name,email,phone) values('example','example@gmail.com','987654677')");  //regular query
	}
}

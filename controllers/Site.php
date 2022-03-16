<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    //    $this->load->model("site_model");

    }
	public function index()
	{
       $message = $this->site_model->run_my_query();
        $info_array=array("organization" => "Skill-lync","name"=>"Ajith kumar","team"=>"Web Development", "message"=>$message);
		// $this->load->view('include/header');
        // $this->load->view('include/content');
        // $this->load->view('include/footer');
        $this->load->view('include/main',$info_array);
	}
    public function pass_var(){
        // $info_array=array("organization" => "Skill-lync","name"=>"Ajith kumar","team"=>"Web Development");
        $this->load->view('pass_variable',array(
            "organization" => "Skill-lync","name"=>"Ajith kumar","team"=>"Web Development"
        ));
    }   
    
    public function about(){
        $this->load->view('about');
    }
    public function contact(){
        echo "<h2> this is contact </h2>" ;
    }
    public function service($a="",$id=""){
        echo "<h2> this is a service page <h2>".$a , $id;
    }
    public function product($id= "",$name = ""){
        
        echo "<h2> this is a product id : </h2>.".$id;
        echo "<h2> this is a product name :</h2> <br>". $name;
    }
   public function insert_table_data(){
       $data = array("name"=>"ajithkumar","email"=>"ajith@gamail.com","phone"=>"9515095987");
      echo $this->site_model->insert_table_data($data);
   }
}
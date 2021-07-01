<?php
class CSignup extends CI_Controller
{ 
    public function __construct(){
        parent::__construct();
        // $this->load->database();
        $this->load->model("UserModel");
        $this->load->library('session');
    }
    
    function index() 
    {
        $this->load->library('session');
        $this->load->helper("url");
        $this->load->view("VSignup");
    }

}
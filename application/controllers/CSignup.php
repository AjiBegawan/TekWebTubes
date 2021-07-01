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
               
    function prosesDaftar()
    {
        $this->load->model("UserModel", "", TRUE);
        $konsumen = array(
            "Nama" => $this->input->post("Nama"),
            "Gender" => $this->input->post("Gender"), 
            "Alamat" => $this->input->post("Alamat"), 
            "No_Tlpon" => $this->input->post("No_Tlpon"), 
            "Password" => $this->input->post("Password")
        );
        
        if ($this->UserModel->insertkonsumen($konsumen)) {
            redirect(site_url("/CLogin"));
        } else {
            redirect(site_url("/CSignup"));
        }
    }


}
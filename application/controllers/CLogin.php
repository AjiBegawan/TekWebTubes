<?php
class CLogin extends CI_Controller
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
        $this->load->view("Vlogin");
    }

    function proseslogin()
    {
        $this->load->model("UserModel");
        $this->load->library('session');
        $ID_Nama = $this->input->post('ID_Nama');
        $Password = $this->input->post('Password');
        $where = array('ID_Nama' => $ID_Nama, 'Password' => $Password);
        $cek = $this->UserModel->login("konsumen", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array('ID_Nama' => $ID_Nama, 'status' => "login");
            $this->session->set_userdata($data_session);
            redirect(site_url("/CToko"));
            // echo "berhasil";
        }else{
            $this->session->set_flashdata("error", "Username atau Password Salah");
            redirect(site_url("CLogin"));
            // redirect(base_url("http://[::1]/TekWebTubes/TekWebTubes/CLogin/"));
        }
    }
}
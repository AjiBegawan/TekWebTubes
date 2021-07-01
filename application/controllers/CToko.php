<?php
class CToko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MToko", "", TRUE);
        $this->load->helper("url");
    }

    function index() 
    {  
        $this->load->view("halutama");
    }

    function belanja()
    {
        $this->load->helper("url");
        $data['barang'] = $this->MToko->getToko();
        $this->load->view("halbelanja", $data);
    }
}

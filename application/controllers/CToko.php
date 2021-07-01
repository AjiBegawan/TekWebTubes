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
        $this->load->helper("url");

     $this->load->view("halutama");
    }

    function belanja()
    {
        $this->load->helper("url");
        $data['barang'] = $this->MToko->getToko();
        $this->load->view("halbelanja", $data);
    }

    function tambah(){
        $this->load->model('MToko');
        $data['barang'] = $this->MToko->getToko();
        $this->load->view("haltambah", $data);
    }

    function prosesTambah()
    {
        if ($this->MToko->insert()) {
            redirect(site_url("ctoko"));
        } else {

            redirect(site_url("ctoko/belanja"));
        }
    }
}

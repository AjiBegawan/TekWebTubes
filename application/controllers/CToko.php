<?php
class CToko extends CI_Controller
{
    

    function index() 
    {
        $this->load->helper("url");
        $this->load->view("halutama");
    }

    function belanja()
    {
        $this->load->helper("url");
        $this->load->view("halbelanja");
    }
}

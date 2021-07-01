<?php
class CToko extends CI_Controller
{
    function index()
    {
        $this->load->helper("url");
        $this->load->view("halutama");
    }
}

<?php
class CLogin extends CI_Controller
{ 
    function index() 
    {
        $this->load->helper("url");
        $this->load->view("Vlogin");
    }

}
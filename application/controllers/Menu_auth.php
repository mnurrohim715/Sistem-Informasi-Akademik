<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_auth extends CI_Controller
{
    public function __construct()
    {
      parent::__construct(); 
    }
    public function index ()
    {
        $this->load->view('templates_administrator/header');
        $this->load->view('menu_auth');
        $this->load->view('templates_administrator/footer');        
    }
}

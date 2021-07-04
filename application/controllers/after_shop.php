<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class after_shop extends CI_Controller {

    public function index() 
    {
        $this->load->view('after_shop/asheader');
        $this->load->view('after_shop/ascontent');
        $this->load->view('after_shop/asfooter');
    }
    
}
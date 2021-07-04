<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {

    public function index() 
    {
        $this->load->view('detail/details');
    }
    
}
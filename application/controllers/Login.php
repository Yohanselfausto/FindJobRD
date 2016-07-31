<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct()
{
    parent::__construct();
}

public function Login(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Login');
  $this->load->view('Templates/Footer');
}

}

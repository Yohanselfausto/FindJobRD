<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct()
{
    parent::__construct();
}

public function index()
{
    $this->load->view('Templates/Header');
    $this->load->view('Templates/home');
    $this->load->view('Templates/Footer');

}

public function Login(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Login');
  $this->load->view('Templates/Footer');
}

}

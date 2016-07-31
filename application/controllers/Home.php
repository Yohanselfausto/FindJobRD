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
    $this->load->view('Templates/Home');
    $this->load->view('Templates/Footer');

}

public function Nosotros(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Nosotros');
  $this->load->view('Templates/Footer');
}

public function Servicios(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Servicios');
  $this->load->view('Templates/Footer');
}

public function Contacto(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Contacto');
  $this->load->view('Templates/Footer');
}

public function Empleos(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Empleos');
  $this->load->view('Templates/Footer');
}

public function Curriculum(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Curriculum');
  $this->load->view('Templates/Footer');
}

public function Ayuda(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Ayuda');
  $this->load->view('Templates/Footer');
}
}

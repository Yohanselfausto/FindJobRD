<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formularios extends CI_Controller {

function __construct()
{
    parent::__construct();
}

public function PreRegistro(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/PreRegistro');
  $this->load->view('Templates/Footer');
}

public function RegistroCandidato(){
  $this->load->view('Templates/Header');
  $this->load->view('Personas/RegistroCandidato');
  $this->load->view('Templates/Footer');
}

}

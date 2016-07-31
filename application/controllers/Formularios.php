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

public function RegistroEmpresa(){
  $this->load->view('Templates/Header');
  $this->load->view('Empresas/RegistroEmpresa');
  $this->load->view('Templates/Footer');
}

public function save(){
  $ID = ($this->input->post('ID'));
  $EMAIL = ($this->input->post('EMAIL'));
  $usuario = ($this->input->post('usuario'));
  $pass = ($this->input->post('pass'));
  $nombre = ($this->input->post('nombre'));
  $apellido = ($this->input->post('apellido'));
  //$cedula = ($this->input->post('cedula'));
  $pais = ($this->input->post('pais'));
  $ciudad = ($this->input->post('ciudad'));
  $direccion = ($this->input->post('direccion'));
  $codigoPostal = ($this->input->post('codigoPostal'));
  $telefono = ($this->input->post('telefono'));
  $curriculum = ($this->input->post('curriculum'));

  $candidato = array(
  'ID_Postulante'  => $ID,
  'EMAIL'  => $EMAIL,
  'USERNAME'  => $usuario,
  'PASS'  => $pass,
  'NOMBRE'  => $nombre,
  'APELLIDO'  => $apellido,
  //''  => $cedula,
  'TELEFONO'  => $pais,
  'ID_CIUDAD'  => $ciudad,
  'DIRECCION'  => $direccion,
  'CODIGO_POSTAL'  => $codigoPostal,
  'TELEFONO'  => $telefono,
  'CURRICULUM'=> $curriculum
  );

$candidatoId = $this->Candidato_Model->addCandidato($candidato);
}
}

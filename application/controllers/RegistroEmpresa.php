<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroEmpresa extends CI_Controller {

function __construct()
{
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('RegistroEmpresa_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
}

public function RegistroEmpresa(){
  $indice =0;
  $data = array();
  $data['ID_Empresa'] = $this->RegistroEmpresa_model->getEmpresa($indice);
  $data ['NOMBRE'] = $this->RegistroEmpresa_model->getEmpresa();
  $data['RNC'] = $this->RegistroEmpresa_model->getEmpresa();
  $data ['ACTIVIDAD'] = $this->RegistroEmpresa_model->getEmpresa();
  $data['UBICACION'] = $this->RegistroEmpresa_model->getEmpresa();
  $data ['DESCRIPCION'] = $this->RegistroEmpresa_model->getEmpresa();
  $data['ID_REPRESENTANTE'] = $this->RegistroEmpresa_model->getEmpresa($indice);
  $data ['ID_PAIS'] = $this->RegistroEmpresa_model->getEmpresa();
  $data['ID_CIUDAD'] = $this->RegistroEmpresa_model->getEmpresa();
  $this->load->view('Templates/Header');
  $this->load->view('Empresas/RegistroEmpresa');
  $this->load->view('Templates/Footer');
}

public function guardar()
{

if($_POST)
{
  $this->RegistroEmpresa_model->save($_POST);
}
/*$data = array();
$data['Jugadores'] = $this->Jugador_Model->getPlayers();
$this->load->view('Templates/Header.php');
$this->load->view('Jugador/Listado.php', $data);
$this->load->view('Templates/Footer.php');*/
}


}

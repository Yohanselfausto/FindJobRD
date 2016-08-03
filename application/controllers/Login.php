<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct()
{
    define('NOLOGIN',true);
    parent::__construct();
    $this->load->model('Login_model');
}

public function Login(){
  $this->load->view('Templates/Header');
  $this->load->view('Templates/Login');
  $this->load->view('Templates/Footer');
}

function Login1()
{
  $USERNAME = $_POST['USERNAME'];
  $pass = $_POST['PASS'];

  $validation = $this->Login_model->validateUser($user,$pass);

  if($validation !==false)
  {
    $_SESSION['Postulante'] = $_POST['USERNAME'];
    $this->load->view('Templates/Curriculum');

  }
  else {
        redirect('Templates/PreRegistro');

  }

  function logout()
{
  session_destroy();

  $this->Login();
}
}

}

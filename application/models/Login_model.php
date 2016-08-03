<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    $this->load->database();
    parent::__construct();
    //Codeigniter : Write Less Do More
  }


  function validateUser($user, $pass)
  {
    $this->db->where("Nombre =", $user);
    $this->db->where("Clave =", md5($pass));
    $query = $this->db->get('Postulante');

    $resultSet = $query->result();

    if(count($resultSet)>0)
    {
      return true;
    }

    else
    {
      return false;
    }
  }

}

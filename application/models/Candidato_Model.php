<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato_Model extends CI_Model{

   function __construct()
  {
          parent::__construct();
          $this->load->database();
  }

  function addCandidato($candidato=NULL){  
  $this->db->insert('trn_employee', $candidato);
  return $this->db->insert_id();
 }

}

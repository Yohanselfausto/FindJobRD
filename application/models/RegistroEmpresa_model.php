<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroEmpresa_model extends CI_Model{

  public function __construct()
  {
          parent::__construct();
          $this->load->database();
  }


  function save ($Empresa)
  {
    $id = $Empresa['ID_Empresa'];

    if($id+0 == 0)
    {
      $this->db->insert('Empresa', $Empresa);
    }
    else {
      unset($Empresa['ID_Empresa']);
      $this->db->where('ID_Empresa = ', $id);
      $this->db->update('Empresa', $Empresa);
    }



  }

  function getEmpresa()
  {
  $query =  $this->db->get('Empresa');


    return $query->result();
  }

  /*function getPlayers()
  {
    //consulta para obtener todos los registros de la tabla jugador
    $query = $this->db->get('Jugador');
    return $query->result();
  }


  function getJugador($id)
  {
    $Jugador = new stdClass();
    $Jugador->IdJugador =0;
    $Jugador->Equipo="";
    $Jugador->Nombre="";
    $Jugador->Apodo="";
    $Jugador->Posicion="";
    $Jugador->Numero="";

    //consulta para obtener registro por id
   $query = $this->db->where('IdJugador =', $id);
   $query = $this->db->get('Jugador');

    $resultSet =  $query->result();

    if(count($resultSet) > 0)
    {
      $Jugador = $resultSet[0];
    }

    return $Jugador;
  }


function DelJugador($id)
{
  $this->db->where('IdJugador =', $id);
  $this->db->delete('Jugador');
}
*/

}

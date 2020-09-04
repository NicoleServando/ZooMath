<?php
 
class Usuarios extends CI_Model{

	function __construct(){
        $this->load->database();
    }
 
  function verificar($Correo, $Contrasena){
    $this->db->select('*');
    $this->db->where('Correo = "'.$Correo.'"');
    $this->db->where('Contrasena = "'.$Contrasena.'"');
    $this->db->limit(1);
    $query = $this->db->get('Usuarios');
    if ($query->num_rows() > 0){
      return $query->row();
    } else {
      return ".";
    }
  }
 
}

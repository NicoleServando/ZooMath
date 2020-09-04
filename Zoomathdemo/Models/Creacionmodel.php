<?php
               //extendemos CI_Model
class Creacionmodel extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM Usuarios;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($Nombre,$Proecio){
        $consulta=$this->db->query("SELECT Nombre FROM Usuarios WHERE Nombre LIKE '$Nombre'");
        if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO Usuarios VALUES(NULL,'$Nombre','$Apellido','$Correo','$Contrasena','$Fecha_de_Cumpleaños');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
 
 
}
?>

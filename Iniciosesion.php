<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iniciosesion extends CI_Controller {
      public function __construct() {
        parent::__construct();
        $this->load->helper("url"); 
        $this->load->model("Usuarios");
        $this->load->library("session");
    }
     
	public function index(){
         $this->load->model('Usuarios');
         $datos['ver']=$this->Usuarios->ver();
         $datos['error']="";
        $this->load->view('inicio_sesion', $datos);
    }
    	public function entrada()
	{   $datos["error"]="Acceso denegado.";
        if($this->input->post("submit")){
	    	$Correo = $this->input->post('Correo');
	    	$Contrasena = $this->input->post('Contrasena');
		
	    	$this->load->model('Usuarios');
	    	
			$reg=$this->Usuarios->verificar($Correo, $Contrasena);
			if ($reg!="."){
				$this->load->view('menujuegos',$datos);
			} else {
				echo "Error al entrar";
				$datos["error"]="Acceso denegado.";
				$this->load->view('inicio_session',$datos);
			}
		} else {
			
			$this->load->view('inicio_session',$datos);
		}
	}
}

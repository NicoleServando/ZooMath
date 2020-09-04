<?php
                        //extendemos CI_Controller
class CreacionC extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //llamo al helper url
        $this->load->helper("url"); 
         
        //llamo o incluyo el modelo
        $this->load->model("Creacionmodel");
         
        //cargo la libreria de sesiones
        $this->load->library("session");
    }
     
    //controlador por defecto
    public function index(){
         $this->load->model('Creacionmodel');
         $datos['ver']=$this->Creacionmodel->ver();
         $datos['error']="";
        $this->load->view('crearcuenta', $datos);
    }
     public function volver(){
        $this->load->view('crearcuenta',$datos);
       
	}
    //controlador para añadir
    public function add(){
         
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->Creacionmodel->add(
                $this->input->post("IdUsuario"),
                $this->input->post("Nombre"),
                $this->input->post("Apellido"),
                $this->input->post("Correo"),
                $this->input->post("Contrasena"),
                $this->input->post("Fecha_de_Cumpleaños") 
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto', 'Usuario añadido correctamente');
        }else{
            $this->session->set_flashdata('incorrecto', 'Usuario añadido correctamente');
        }
         
        //redirecciono la pagina a la url por defecto
        $this->load->view('menujuegos');
    }

}
?>

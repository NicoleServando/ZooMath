<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title> 
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>auxiliar/imgs/encalila.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>auxiliar/inicio.css">
  </head>
  <body>
    <nav>
    <div class="nav-wrapper deep-orange lighten-1">
      <a href="" class="brand-logo center "><img src="<?php echo base_url(); ?>auxiliar/imgs/ZooLogo.png" width="35%"></a>
      <?php  echo  anchor( 'CreacionC', 'Volver' , ['class'=>'btn deep-orange lighten-1  btn-primary'] );?>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a href="">Personajes</a></li>
        <li class="cyan lighten-1"><a href="">¿Que Somos?</a></li>
        <li class=""><a href="Menu/volver_menu">Volver</a></li>
      </ul>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li> <img src="<?php echo base_url(); ?>auxiliar/imgs/encalila.png" width="20%"></li>
      </ul>
    </div>
  </nav>
   <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');
             
            if($this->session->flashdata('incorrecto'))
                echo $this->session->flashdata('incorrecto');
        ?>

    <div class="Conteiner-form">
    <div class="formulario">
      <h2>Crear Cuenta</h2>
    <form  action="<?php echo base_url().'index.php/CreacionC/add';?>" method="post">
      <input type="text" name="Nombre" placeholder="Nombre" required>
      <input type="text" name="Apellido" placeholder="Apellido" equired>
      <input type="email" name="Correo" placeholder="Email"  required>
      <input type="password" name="Contrasena"  placeholder="Contraseña"   required>
      <input type="date" name="Fecha_de-Cumpleanos"  placeholder="Cumpleaños"   required>
      <input type="submit" name="submit" value="Ingresar">
    </form>
    </div>
    </div>
 </body>
</html>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <base href="<?php echo base_url(); ?>index.php/">
    <meta charset="utf-8">
    <title>Bienvenido</title> 
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>auxiliar/imgs/encalila.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>auxiliar/inicio.css">
  </head>
  <body>
    <nav>
    <div class="nav-wrapper deep-orange lighten-1">
      <a  class="brand-logo center "><img src="<?php echo base_url(); ?>auxiliar/imgs/ZooLogo.png" width="35%"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a >Personajes</a></li>
        <li class="#2ab5b5"><a >¿Que Somos?</a></li>
        <li class=""><a >Inicio</a></li>
      </ul>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li> <img src="<?php echo base_url(); ?>auxiliar/imgs/encalila.png" width="20%"></li>
      </ul>
    </div>
  </nav>

    <div class="Conteiner-form">
         <div class="toggle">
         <span class="card-tittle"><a href="CreacionC">Crear Cuenta</a></span>
    <div class="formulario">
      <h2> Inicio</h2>
    <form action="<?php echo base_url().'index.php/Iniciosesion/entrada';?>" method="post">
      <input type="email" name="Correo" placeholder="Email"  required>
      <input type="password" name="Contrasena"  placeholder="Contraseña"   required>
      <input type="submit" name="submit" value="Ingresar">
    </form>
    </div>
    </div>

  </body>
</html>

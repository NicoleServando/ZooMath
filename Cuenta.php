<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar o Registrarse</title>
    <link rel="icon" type="image/png" href="./imgs/encalila.png">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/Paginadecuenta.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-fixed">
      <nav class="deep-orange accent-2">
        <div class="nav-wrapper">
          <a href="Paginainicial.html" class="brand-logo"> B I E N V E N I D O S</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
               <a href="Cuenta.html">
                 <i class="material-icons center">account_box</i>
               </a>
            </li>
            <li>
               <a href="Personajes.html">
                 <i class="material-icons center">favorite</i>
               </a>
            </li>
            <li>
               <a href="Contactos.html">
                 <i class="material-icons center">contact_support</i>
               </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

  <div class="Conteiner-form">
    <div class="toggle">
      <span> <a href="#">Crear Cuenta</a></span>

    </div>
    <div class="formulario">
      <h2>Iniciar sesion</h2>
      <form class="" action="index.html" method="post">
        <input type="email" name="Email" placeholder="Email" required>
        <input type="password" name="contraseña"  placeholder="Contraseña" required>
        <input type="submit" name="Ingresodesesion" value="Ingresar" >
      </form>
    </div>
    <div class="formulario">
      <h2>Crea tu Cuenta</h2>
      <form class="" action="index.html" method="post">
        <input type="text" name="User"  placeholder="Nombre de usuario" required>
        <input type="email" name="Email" placeholder="Email" required>
        <input type="password" name="contraseña"  placeholder="Contraseña" required>
        <input type="submit" name="Registro" value="Registarse" >
      </form>
    </div>
    <div class="reset-password">
      <a href="#">Olvide mi Contraseña</a>

    </div>
  </div>




















  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/registro.js">  </script>

  </script>

  </body>
</html>

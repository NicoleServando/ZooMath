<?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      $conexion = mysqli_connect("localhost","ZooMath","123456","Usuarios");

      mysqli_query($conexion, "insert into menu(
          menu,rol,estado
      ) value('$_REQUEST[menu]','$_REQUEST[rol]','$_REQUEST[estado]')")
      or die("Problemas en el insert" . mysli_error($conexion));

     mysqli_close($conexion);
 ?>

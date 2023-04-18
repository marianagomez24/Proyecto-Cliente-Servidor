<?php
session_start();
require("Conexion.php");

if (isset($_SESSION['correo'])) {
 
  $correo = $_SESSION['correo'];

  if (isset($_FILES['photo'])) {
  
    $imagen = file_get_contents($_FILES['photo']['tmp_name']);

    $imagen_escapada = mysqli_real_escape_string($conexion, $imagen);

    $actualizar_imagen = "UPDATE usuarios SET Foto_Perfil='$imagen_escapada' WHERE correo='$correo'";
    mysqli_query($conexion, $actualizar_imagen);
  }

  header("Location: http://localhost/Proyecto-Cliente-Servidor-main/PHP/perfil.php");
  exit();
} else {
  header("Location: http://localhost/Proyecto-Cliente-Servidor-main/PHP/perfil.php");
  exit();
}

?>

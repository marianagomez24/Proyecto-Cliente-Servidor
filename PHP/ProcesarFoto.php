<?php
session_start();
require("Conexion.php");

if (isset($_SESSION['correo'])) {
  // Obtener el correo del usuario actual
  $correo = $_SESSION['correo'];

  if (isset($_FILES['photo'])) {
    // Leer el archivo de imagen como un flujo de bytes
    $imagen = file_get_contents($_FILES['photo']['tmp_name']);

    // Escapar el flujo de bytes para evitar problemas de SQL Injection
    $imagen_escapada = mysqli_real_escape_string($conexion, $imagen);

    // Actualizar la columna BLOB en la tabla de usuarios
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

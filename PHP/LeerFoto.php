<?php

session_start();
require("Conexion.php");

if (isset($_SESSION['correo'])) {

  $correo = $_SESSION['correo'];

  $obtener_imagen = "SELECT Foto_Perfil FROM usuarios WHERE correo='$correo'";
  $resultado = mysqli_query($conexion, $obtener_imagen);
  $fila = mysqli_fetch_assoc($resultado);
  $contenido_imagen = $fila['Foto_Perfil'];
  header('Content-Type: image/jpeg');
  echo $contenido_imagen;
} else {
  header("Location: http://localhost/Proyecto-Cliente-Servidor/Perfil.html");
  exit();
}
?>

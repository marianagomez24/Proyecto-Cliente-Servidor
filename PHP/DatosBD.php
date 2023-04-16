<?php 
require("Conexion.php");
session_start();

if(isset($_COOKIE['mi_sesion'])) {
    $correo = $_COOKIE['mi_sesion'];
    // Luego puedes usar el valor de $correo para hacer una consulta a la vista y obtener los datos del usuario.
    // Por ejemplo:
    $consulta = mysqli_prepare($conexion, "SELECT nombre,apellido_paterno,apellido_materno,fecha_creacion,membresia,correo FROM vista_usuarios WHERE correo = ?");
    mysqli_stmt_bind_param($consulta, "s", $correo);
    mysqli_stmt_execute($consulta);
    mysqli_stmt_bind_result($consulta, $nombre, $apellido_paterno, $apellido_materno, $fecha_creacion, $membresia, $correo);
    mysqli_stmt_fetch($consulta);
}

?>


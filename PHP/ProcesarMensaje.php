<?php
session_start();
require('Conexion.php');
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error($conexion));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST["nombreC"];
    $Correo = $_POST["emailC"];
    $Mensaje = $_POST["mensajeC"];
    $insertar = mysqli_prepare($conexion, "INSERT INTO mensaje (Remitente, Mail, Mensaje) values(?, ?, ?) ");
    mysqli_stmt_bind_param($insertar,"sss", $Nombre, $Correo, $Mensaje);

}

if (mysqli_stmt_execute($insertar)) {
    header("location:http://localhost/Proyecto-Cliente-Servidor-main/HTML/Contacto.php?success=1");
}
?>

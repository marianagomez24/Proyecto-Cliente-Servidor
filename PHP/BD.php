<?php
session_start();
require("Conexion.php");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error($conexion));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
    $result = mysqli_query($conexion, $sql);
    $present = mysqli_num_rows($result);

    if ($present > 0) {
        $_SESSION['email_alert'] = '1';
     
        header("Location:http://localhost/Proyecto-Cliente-Servidor-main/PHP/Registro.php");
    } else {
        $contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
        $fecha_creacion = date('Y-m-d H:i:s'); 

        $consulta = mysqli_prepare($conexion, "INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, correo, contrasena, fecha_creacion) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($consulta, "ssssss", $nombre, $apellido_paterno, $apellido_materno, $correo, $contrasena_encriptada, $fecha_creacion);
      

        if (mysqli_stmt_execute($consulta)) {
           header("Location:http://localhost/Proyecto-Cliente-Servidor-main/HTML/login.html");
        } else {
            echo "Error al registrar los datos: " . mysqli_error($conexion);
        }

        mysqli_stmt_close($consulta);
    }
}
?>

<?php
session_start();
require("Conexion.php");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error($conexion));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = $_POST['CorreoL'];
    $contraseña = $_POST['contraseñaL'];

    $consulta = mysqli_prepare($conexion, "SELECT correo, contrasena FROM usuarios WHERE correo = ?");
    mysqli_stmt_bind_param($consulta, "s", $correo);
    mysqli_stmt_execute($consulta);
    mysqli_stmt_bind_result($consulta, $correo_bd, $contrasena_bd);
    mysqli_stmt_fetch($consulta);

    if (password_verify($contraseña, $contrasena_bd)) {
        // Si la contraseña coincide, iniciar sesión
        $_SESSION['correo'] = $correo_bd;
        $session_id = session_id(); // Obtener el ID de la sesión
        setcookie('mi_sesion', $correo_bd, time() + 3600, '/'); // Crear una cookie de sesión con el nombre "mi_sesion"
        header("Location: http://localhost/Proyecto-Cliente-Servidor-main/PHP/Perfil.php");
        exit();
    } else {
        // Si la contraseña no coincide, mostrar un mensaje de error
        echo "El correo electrónico y/o contraseña son incorrectos.";
        header("Location:http://localhost/Proyecto-Cliente-Servidor-main/HTML/login.html");
        exit();
    }
}

?>
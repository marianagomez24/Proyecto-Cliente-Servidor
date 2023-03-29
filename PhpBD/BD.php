<?php

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

    $consulta = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "s", $correo);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
       
        $response = array(
            "success" => false,
            "message" => "El correo ya está registrado en la base de datos"
        );
    } else {
       
        $contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);

       
        $consulta = mysqli_prepare($conexion, "INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, correo, contrasena) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($consulta, "sssss", $nombre, $apellido_paterno, $apellido_materno, $correo, $contrasena_encriptada);

       
        if (mysqli_stmt_execute($consulta)) {
           
            $response = array(
                "success" => true,
                "message" => "Registro exitoso"
            );
        } else {
          
            $response = array(
                "success" => false,
                "message" => "Error al registrar los datos: " . mysqli_error($conexion)
            );
        }


        mysqli_stmt_close($consulta);
    }
}


header('Content-Type: application/json');
echo json_encode($response);


mysqli_close($conexion);
?>



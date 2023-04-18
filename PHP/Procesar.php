<?php
require('Conexion.php');

session_start();

if(!isset($_SESSION['correo'])) {
 
  header('Location: login.php');
  exit;
}
$correo = $_SESSION['correo'];

if (!$conexion) {
  die("Error al conectar a la base de datos: " . mysqli_connect_error($conexion));
}

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

if (is_array($datos)) {
  $id_transaccion = $datos['details']['id'];
  $status= $datos['details']['status'];
  $Descripcion = $datos['details']['purchase_units'][0]['description'];

  if ($status === "COMPLETED") {

    switch ($Descripcion) {
      case 'gold':
        $membresiaId = 1;
        break;
      case 'smart':
        $membresiaId = 2;
        break;
      case 'basico':
        $membresiaId = 3;
        break;
      default:
        $membresiaId = 0;
        break;
    }
    
    $sql = "UPDATE usuarios SET membresiaId=$membresiaId WHERE correo='" . $correo . "'";
    if (mysqli_query($conexion, $sql)) {
      echo "Membresía actualizada correctamente";
    } else {
      echo "Error actualizando la membresía: " . mysqli_error($conexion);
    }
  } else {
    echo "Error: El estado de la transacción no es 'COMPLETED'";
  }
}

mysqli_close($conexion);
?>


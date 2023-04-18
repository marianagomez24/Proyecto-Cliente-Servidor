
<?php
require('DatosBD.php');
?>




<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estiloPerfil.css">
    <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Perfil</title>
      
</head>
<body>
<header>
  <div class="head">

  <div class="logo">
    <a href="#">Capital Gym</a>
  </div>

  <nav class="navbar">
    <a href="../HTML/index.php">Inicio</a>
    <a href="../HTML/instalaciones.php">Instalaciones</a>
    <a href="../HTML/Compras.php" >Planes</a>
    <a href="../HTML/Contacto.php">Contacto</a>
    <a href="../HTML/Horario.php">Horario</a>
    <a href="../HTML/Personal.php">Nosotros</a>
         <?php if (isset($_SESSION['correo'])) { ?>
    <a href="Perfil.php">Perfil</a>
        <?php } else { ?>
    <a href="Registro.php">Registro</a>
        <?php } ?>
  </nav>
</header>
<div class="profile-container">
  <div class="profile-image">
    <img src="LeerFoto.php" alt="Foto de perfil">
    <div class="edit-photo-btn">
      <button id="edit-photo-btn">Editar foto</button>
    </div>
  </div>
  <div class="profile-data">
    <h1>Nombre: <?php echo $nombre;?></h1>
    <h1>Primer apellido: <?php echo $apellido_paterno;?></h1>
    <h1>Segundo apellido: <?php echo $apellido_materno;?></h1>
    <h1>Fecha de creacion: <?php echo $fecha_creacion;?></h1>
    <h1>Tipo de membresia: <?php echo $membresia;?></h1>
  </div>
</div>


<div id="edit-photo-form" style="display: none;">
  <form method='post' enctype='multipart/form-data' action='ProcesarFoto.php'>
    <input type="file" name="photo">
    <input type="submit" value="Subir foto">
  </form>
</div>
  
  <script>
    var editPhotoBtn = document.getElementById('edit-photo-btn');
    var editPhotoForm = document.getElementById('edit-photo-form');
  
    editPhotoBtn.addEventListener('click', function() {
      editPhotoForm.style.display = 'block';
    });
  </script>




</body>







</html>

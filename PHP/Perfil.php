

<?php
require('DatosBD.php');
?>




<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Perfile.css">
    <style>
    *{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
  
}

body{
    text-align: center;
    font-family: 'Nuosu SIL', serif;
    font-family: 'Oswald', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
}

ol{
    text-align: center;
    font-family: 'Nuosu SIL', serif;
    font-family: 'Oswald', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
}

.head{
    display: flex;
    margin-top:70px;
    align-items: center;
    justify-content: space-between;
    height: 70px;
    background-color: #011526;
    position: fixed;
    width: 100%;
    z-index: 200;
}

.navbar{
    display: flex;
    margin-right: 10px;

}

.logo {
margin-left: 30px;

}

.logo a {
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-size: 20px;

}

.navbar a {
    display: block;
    padding: 23px 20px;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 20px;
}

.navbar a:hover {
    background: #012E40;
}

header{
    display: flex;
    justify-content: center;
    align-items: center;
}

.header {
    height: 60vh !important;
    background: url(inicio2.jpg) no-repeat center;
    background-size: cover;
}
   










.profile-container {
  height: 300px;
  margin: 50px auto;
  max-width: 600px;
  padding: 20px;
  border: 1px solid #ccc;
  display: grid;
  grid-template-columns: 1fr 2fr;
  grid-column-gap: 20px;
  align-items: center;
  position: relative; /* Agregado */
}

.profile-image {
  display: flex;
  justify-content: left;
  align-items: left;
  flex-direction: column;
  width: 200px;
  height: 200px;
  overflow: hidden;
  margin-right: 50px;
}

.profile-image img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}

.profile-image button {
  position: absolute; /* Actualizado */
  bottom: 0;
  left: 0; /* Actualizado */
  background-color: #fff;
  border: 2px solid #666;
  padding: 10px 20px;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease; /* Agregado */
}

.profile-image button:hover {
  background-color: #666; /* Agregado */
  color: #fff; /* Agregado */
}

.profile-data {
  font-size: 16px;
  color: #666;
  line-height: 1.5;
}

.profile-data h1 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}



    </style>
</head>
<body>
<header>
  <div class="head">

  <div class="logo">
    <a href="#">Capital Gym</a>
  </div>

  <nav class="navbar">
    <a href="../HTML/index.php">Inicio</a>
    <a href="Registro.php" >Planes</a>
    <a href="#">Contacto</a>
    <a href="#">Horario</a>
    <a href="#">Nosotros</a>
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
    <h1 contenteditable="true"><?php echo $nombre; ?></h1>
    <h1><?php echo $apellido_paterno;?></h1>
    <h1><?php echo $apellido_materno;?></h1>
    <h1><?php echo $fecha_creacion;?></h1>
  </div>
</div>

<!-- Formulario para subir una nueva foto -->
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
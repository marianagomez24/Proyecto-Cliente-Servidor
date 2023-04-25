<?php
session_start();
// Verificar si el usuario ha iniciado sesión
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="../CSS/styleInicio.css">
  <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  

	<title>Personal</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
  <script src="../JS/funcions.js"></script>
  
  
  
 <div class="head">

        <div class="logo">
            <a href="#">Capital Gym</a>
        </div>
        <nav class="navbar">
    <a href="index.php">inicio</a>
<a href="instalaciones.php">Instalaciones</a>
    <a href="Compras.php">Planes</a>
    <a href="Contacto.php">Contacto</a>
    <a href="Horario.php">Horario</a>
    <a href="Personal.php">Nosotros</a>
         <?php if (isset($_SESSION['correo'])) { ?>
    <a href="../PHP/perfil.php">Perfil</a>
        <?php } else { ?>
    <a href="../PHP/Registro.php">Registro</a>
        <?php } ?>
        <?php if (!$logged_in && !isset($_SESSION['correo'])) { ?>
    <a href="login.html">Iniciar sesión</a>
        <?php } ?>
</nav>

    </div>
   
    <div style="background-image: url('../IMG/fondo.avif'); background-repeat: no-repeat; background-size: cover; position: relative; width: 100%; height: 35%; margin: 0 auto; display: flex; flex-direction: column; align-items: center; justify-content: center;">
      <div id="imagenes">
        <h1>Entrenadores</h1>
        <div>
          <img src="../IMG/entrenadoraAna.avif" id="ImagenMujer" onclick="scrollToDescription()">
          <p>Ana</p>
        </div>
        <div>
          <img src="../IMG/entrenador-sonriente-mirando-camara-gimnasio_107420-6296.avif" id="ImagenHombre" onclick="scrollToDescription2()">
          <p>Carlo</p>
        </div>
        <div>
          <img src="../IMG/descarga (3).jpg" id="ImagenJuan" onclick="scrollToDescription3()">
          <p>Juan</p>
        </div>
      </div>
    </div>
    
    <script src="../JS/imagenFuncion.Js"></script>
       
   
    
      <div style="background-image: url('../IMG/fondogim.jpg'); background-repeat: no-repeat; background-size: cover; position: relative; width: 100%; height: 100%; margin: 0 auto; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: rgba(53, 52, 52, 0.5); background-blend-mode: multiply;">
        <section >
          <div class="image-text">
            <div class="">
              <img src="../IMG/entrenadoraAna.avif" style="   position: absolute;
              left: 0;
              margin-right: 200px;
              width: 20%; 
              height: 20%x;
            ">
              <p id="descripcion" style="
              width: 700px;
              font-size:
               20px; 
               right: 0;
               margin-left: 10px;
               color: white;"
               >Ana es una entrenadora altamente cualificada y motivadora, con una amplia experiencia en el campo del fitness y el entrenamiento personalizado. Es conocida por su enfoque amigable y comprometido con sus clientes, y trabaja de manera constante para ayudarles a alcanzar sus objetivos de acondicionamiento físico y estilo de vida saludable.</p>
            </div>
          </div>
        </section>
        
      <section>
      <div class="image-text">
          <div class="">
            <img src="../IMG/entrenador-sonriente-mirando-camara-gimnasio_107420-6296.avif" style=" 
            margin-top:350px ;
            position: absolute;
            right: 0;
            width: 40%; 
            height: 40%x;
          
            ">
            <p id="descripcion2" style="
            font-size: 20px; 
           position: absolute;
           margin-top:350px ;
           margin-left: 100px;
           width: 700px;
           color: white;
            left: 0;
            margin-right: 200px;
            height: 20%x;"
            >Carlos es un entrenador personal certificado con más de 10 años de experiencia en el campo del fitness. Ha trabajado con una amplia variedad de clientes, desde principiantes hasta atletas avanzados, y se enfoca en crear planes de entrenamiento personalizados y efectivos para ayudar a sus clientes a alcanzar sus metas de salud y estado físico.

              "Carlos es un entrenador personal certificado con más de 10 años de experiencia en el campo del fitness. Trabajó con clientes de todos los niveles, y crea planes de entrenamiento personalizados y efectivos. Con un enfoque holístico en la salud, mejora la alimentación y la calidad del sueño de sus clientes. Crea sesiones de entrenamiento emocionantes y motivadoras para asegurarse de que sus clientes alcancen sus metas de salud y estado físico."</p>
          </div>
      </div>
    </section>
    <section>
      <div class="image-text">
          <div class="">
            <img src="../IMG/descarga (3).jpg" id="juan" style="width: 60%; height: 60%x;
            position: absolute;
              left: 0;
              margin-top: 5px;
              margin-right: 200px;
              width: 35%; 
              height: 35%x;
            ">
            
            <p id="descripcion3" style="  
            width: 700px;
            margin-top: 900px;
            font-size:
             20px; 
             right: 0;
             margin-left: 500px;
             color: white;">
              Juan es un entrenador apasionado por el mundo del fitness y la vida saludable. Se dedica a ayudar a sus clientes a alcanzar sus objetivos de manera efectiva, pero siempre manteniendo un enfoque equilibrado y realista.

              Con una amplia experiencia en el entrenamiento personalizado y en el diseño de planes de nutrición, Juan se asegura de que sus clientes reciban un enfoque holístico para su bienestar físico y mental.
              
              Además, es conocido por su energía positiva, motivación y dedicación para ayudar a sus clientes a superar obstáculos y alcanzar sus metas.

            </p>
          </div>

      </div>
       
      </div>
    </div>
  </section>                      
  <footer class="piePagina">
<div class="grupo1">
     <div class="box">
        <figure>
            <a href="">
                <img src="../IMG/ejercicio.png" alt="LogoCapitalGym">
            </a>
        </figure>
     </div>
     <div class="box">
        <h2>Sobre Nosotros</h2>
        <p>Contamos con mas de 200 sedes alrededor de todo el territorio nacional.</p>
        <p>No dudes en formar parte del mejor gimnasio de Costa Rica.</p>
     </div>
     <div class="box">
        <h2>Síguenos</h2>
        <div class="redsocial">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
        </div>
     </div>
     
</div>
<div class="grupo2">
    <small>&copy;2023 <b>Capital Gym</b> Todos los Derechos de Autor Reservados.</small>
</div>
<div class="grupo3">
</div>
    
</footer>
</body>
</html>

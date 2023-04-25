<?php
session_start();
// Verificar si el usuario ha iniciado sesión
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/styleContacto.css">
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Horario</title>

</head>
<body>

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

    <section class="content sau">
    <br><br><br><br><br><br><br><br>
        <h2 class="title">Horarios</h2>
        <br>
        <p>TODAS nuestras sucursales cuentan con un horario de Lunes a Viernes de 6am a 9pm. <br>
            Sábados y Domingos de 10am a 6pm. <br> <br>
            Días feriados TODAS las sucursales permanecerán CERRADAS. <br><br>
            Para más información, contáctenos al +506 4848-1548
        </p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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

<?php
session_start();
// Verificar si el usuario ha iniciado sesión
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styleInicio.css">
    <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Inicio</title>

</head>
<body>

    <div class="head">

        <div class="logo">
            <a href="#">Capital Gym</a>
        </div>

        <nav class="navbar">
            <a href="index.php">inicio</a>
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

    <header class="content header">
        
        <h2 class="title">BIENVENIDO</h2>
        <p>
            Descubre todos los beneficios que obtendras en nuestro gimnasio.
        </p>

        <div class="btn-home">
            <a href="/HTML/registro.html" class="btn">Registro</a>
            <a href="/HTML/login.html" class="btn">Iniciar Sesión</a>
        </div>
    </header>

    <section class="content sau">

        <h2 class="title">Planes</h2>
        <p>Encuentra las mejores oportunidades que puede brindarte un gimnasio con nosotros.</p>
    
        <div class="box-container">

            <div class="box">
                <img src="../IMG/billete-de-banco.png">
                <h3>Plan Basic</h3>
                <p>$25</p>
            </div>
            <div class="box">
                <img src="../IMG/billete-de-banco.png">
                <h3>Plan Smart</h3>
                <p>$35</p>
            </div>
            <div class="box">
                <img src="../IMG/billete-de-banco.png">
                <h3>Plan Gold</h3>
                <p>$40</p>
            </div>

        </div>

    </section>

    <section class="content price">

        <article class="contain">
            <h2 class="title">Precios</h2>
            <p>Contamos con mas de 200 sedes alrededor de todo el territorio nacional. No dudes en formar parte del mejor gimnasion de Costa Rica.
            </p>

            <a href="compras.php" class="btn">Adquiere tu plan</a>

        </article>

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

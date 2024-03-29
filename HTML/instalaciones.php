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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styleIntalaciones.css">
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Instalaciones</title>

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

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../IMG/caja1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ubicados en San Jose</h5>
              <p>Te esperamos</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../IMG/car0.jpg" class="d-block w-100" alt="banner 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ubicados en Heredia</h5>
              <p>Te esperamos</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../IMG/car2.jpg" class="d-block w-100" alt="banner">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ubicados en Guanacaste</h5>
              <p>Te esperamos</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <section class="content sau">

        <h2 class="title">¿Qué encontrarás en nuestras instalaciones?</h2>
        <p>Encuentra las mejores oportunidades que puede brindarte un ginmasion con nosotros.</p>
        
        <div class="box-container">
        
          <div class="box">
            <img src="../IMG/sparring.webp">
            <h3>Zona de Sparring</h3>
            <p>Te colaboramos con tu defensa personal</p>
        </div>
        <div class="box">
            <img src="../IMG/vestuarios.jpg">
            <h3>Vestuarios</h3>
            <p>Vestuarios totalmente equipados para tu comodida.</p>
        </div>
        <div class="box">
            <img src="../IMG/PesasLinea.jpg">
            <h3>Pesas Libres</h3>
            <p>Te sientes fuerte, ven y pruebanos</p>
        </div>

        <div class="box">
          <img src="../IMG/pesas.avif">
          <h3>Equipos</h3>
          <p>Diferentes tipos de modalidades ajustandonos a tus requerimientos</p>
      </div>
    
        </div>

    </section>

    <section class="content price">

        <article class="contain">
            <h2 class="title">Precios</h2>
            <p>Contamos con mas de 200 sedes al reder de todo el territorio nacional. No dudes en formar parte del mejor gimnasion de Costa Rica.
            </p>

            <a href="/Planes.html" class="btn">Adquiere tu plan</a>

        </article>

    </section>

    <section class="content contact">
        <h2 class="title">Contacto</h2>
        <p> Numero de telefono: +506 4848-1548</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125759.38928838276!2d-84.11334505000002!3d9.935545650000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e342c50d15c5%3A0xe6746a6a9f11b882!2zU2FuIEpvc8Op!5e0!3m2!1ses!2scr!4v1679869134905!5m2!1ses!2scr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <figure class="map">
        </figure>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>

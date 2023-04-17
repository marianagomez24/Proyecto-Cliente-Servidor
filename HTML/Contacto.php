
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
    <link rel="stylesheet" href="../CSS/styleContacto.css">
    <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Contacto</title>

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
    
    <section class="content-formulario">
    <div class="info-formulario">
        <h2>Contáctanos</h2>
        <p>En Gym Capital, nuestra prioridad es brindar a nuestros usuarios la mejor experiencia posible. 
            Sabemos que comenzar una nueva rutina de ejercicio puede ser abrumador, 
            y entendemos que a veces puede haber preguntas o dudas que necesiten ser aclaradas. 
            Es por eso que ofrecemos a nuestros usuarios la posibilidad de contactarnos a través de nuestro sistema de mensajes.
        </p>
        <a href="#"> <i class="fa fa-phone">
        </i>123-456-789</a>

        <a href="#"> <i class="fa fa-envelope">
        </i>info@capitalgym.com</a>

        <a href="#"> <i class="fa fa-map-marked">
        </i>San José, Costa Rica.</a>
    </div>

    <form action="../PHP/ProcesarMensaje.php" method="post" autocomplete="off">
        <input type="text" name="nombreC" placeholder="Ingresa tu nombre"
        class="campo" required>

        <input type="email" name="emailC" placeholder="Ingresa tu correo electronico"
        class="campo" required>

        <textarea name="mensajeC" placeholder="Ingresa tu mensaje" > </textarea>
        <input type="submit" name="enviar" value="Enviar mensaje" class="btn-mensaje">
        <script>
    // Obtener los parámetros de la URL
    const urlParams = new URLSearchParams(window.location.search);
    // Verificar si el parámetro "success" está presente
    if (urlParams.has('success')) {
        // Mostrar un mensaje de éxito utilizando un alert de JavaScript
        alert('El mensaje se envió exitosamente');
    }
</script>

    </form>
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

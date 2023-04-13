<?php 
session_start();
$message='';
if(isset($_SESSION['email_alert'])){
    $message='El correo ya existe';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge>">
  <meta name="viewport" content="width=device-width, initial-scale">
  <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <title>Registro</title>

  <style>
    html{
        height: 100%;
    }
    body{
        margin: 0;
        padding: 0;
        font-family: 'Nuosu SIL', serif;
        font-family: 'Oswald', sans-serif;
        font-family: 'Roboto Condensed', sans-serif;
        background: linear-gradient(#141e30,#243b55);
    }
    .contenedor{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .contenedor h2{
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .contenedor .usuario{
        position: relative;
    }

    .contenedor .usuario input{
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .contenedor .usuario label{
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .contenedor .usuario input:focus ~ label,
    .contenedor .usuario input:valid ~ label{
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }  

    .contenedor form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px;
    }

    .contenedor a:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
    }

    .contenedor a span{
        position: absolute;
        display: block;
    }

    .contenedor a span:nth-child(1){
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent,#03e9f4);
        animation: btn-anim1 1s linear infinite;
    }
    @keyframes btn-anim1{
        0%{
            left: -100%;
        }
        50%, 100% {
            left: 100%;
        }
    }

    .contenedor a span:nth-child(2){
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent,#03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s;
    }
    @keyframes btn-anim2{
        0%{
            top: -100%;
        }
        50%, 100% {
            top: 100%;
        }
    }

    .contenedor a span:nth-child(3){
        right: -100%;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent,#03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s;
    }
    @keyframes btn-anim3{
        0%{
            right: -100%;
        }
        50%, 100% {
            right: 100%;
        }
    }

    .contenedor a span:nth-child(4){
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(270deg, transparent,#03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s;
    }
    @keyframes btn-anim4{
        0%{
            bottom: -100%;
        }
        50%, 100% {
            bottom: 100%;
        }
    }
    .contenedor form button.boton {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
    border: none;
    background-color: transparent;
    cursor: pointer;
}

.contenedor form button.boton:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
}

.contenedor form button.boton span {
    position: absolute;
    display: block;
}

.contenedor form button.boton span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent,#03e9f4);
    animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
    0% {
        left: -100%;
    }
    50%, 100% {
        left: 100%;
    }
}

.contenedor form button.boton span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent,#03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s;
}

@keyframes btn-anim2 {
    0% {
        top: -100%;
    }
    50%, 100% {
        top: 100%;
    }
}

.contenedor form button.boton span:nth-child(3) {
    right: -100%;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent,#03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s;
}

@keyframes btn-anim3 {
    0% {
        right: -100%;
    }
    50%, 100% {
        right: 100%;
    }
}

.contenedor form button.boton span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(270deg, transparent,#03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s;
}

@keyframes btn-anim4 {
    0% {
        bottom: -100%;
    }
    50%, 100% {
        bottom: 100%;
    }
}
.errorp {
  color: red;
  font-size: 20px;
}

input[name="confirmar_contrasena"].errorp {
  border-color: red;
}

#error-contrasena {
  display: none;
}


h4{
    color:red;
}
    

</style> 
<source src="BD.php">
</head>

<body>
    
    <div class="contenedor">
        <h2>Registro</h2>
        
       
        <form action="BD.php" method="post">
            <div class="usuario">
                <input type="text" name="nombre" required>
                <label>Nombre</label>
            </div>
            <div class="usuario">
                <input type="text" name="apellido_paterno" required>
                <label>Primer Apellido</label>
            </div>
            <div class="usuario">
                <input type="text" name="apellido_materno" required>
                <label>Segundo Apellido</label>
            </div>
            <div class="usuario">
                <input type="text" name="correo" id="correo" required >
                <label>Correo</label>
                <h4> <?php echo $message; ?></h4>

            </div>   <?php unset($_SESSION['email_alert']);?>
            <div class="usuario">
                <input type="password" name="contrasena" required>
                <label>Contraseña</label>
            </div>
            <div class="usuario">
                <input type="password" name="confirmar_contrasena" required>
                <label>Confirmar Contraseña</label>
                <span id="error-contrasena" class="errorp">Las contraseñas no coinciden.</span>
            </div>
            <button type="submit" class="boton">Registrar</button>
            <script src="../JS/confirmar.js"></script>

        </form>
    </div>

    
  


</body>


</html>




<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Venta</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AR69R3fIhrYZ7tgA8ACQPUpnZzbnsdvYuFxp24b7so2CoD-MXEGGUOhjdb15aiUUIrts0fQCOP28Z2pV&currency=USD"></script>
    <link rel="stylesheet" href="../CSS/EstiloVenta.css">
</head>
<body>
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

</div>




<div class="flex-container">
<div id="paypal-button-container-1">
  <h1 class="dorado">Subcripcion gold</h1>
  <img src="../IMG/goldPlan.png">
  <script>

  paypal.Buttons({
    style: {
      color: 'gold',
      label: 'checkout',
      height: 40,
    },
    createOrder: function(data, actions) {
  return actions.order.create({
    purchase_units: [{
      name: 'Subcripcion gold',
      description: 'gold',
      amount: {
        value: '40.00'
      },
      quantity: '1'
    }]
  });
  },
    onApprove: function(data, actions) {
      let url ='Procesar.php'
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name + '!');
        console.log(details)
        return fetch(url,{
          method:'post',
          headers:{
            'content-type': 'application/json'
          },
            body: JSON.stringify({
              details:details
            })
        })
      });
    }
  }).render('#paypal-button-container-1');
</script>
</div>

<div id="paypal-button-container-2">
    <h1 class="plata">plan smart</h1>
    <img src="../IMG/planSmart.png">
  <script>
    paypal.Buttons({
      style: {
        color: 'blue',
        label: 'pay',
        height: 40,
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            description: 'smart',
            amount: {
              value: '35.00'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
      let url ='Procesar.php'
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name + '!');
        console.log(details)
        return fetch(url,{
          method:'post',
          headers:{
            'content-type': 'application/json'
          },
            body: JSON.stringify({
              details:details
            })
        })
      });
    }
    }).render('#paypal-button-container-2');
  </script>

</div>

<div id="paypal-button-container-3">
    <h1 class="bronce">plan</h1>
    <img src="../IMG/planBasico.png">
  <script>
    paypal.Buttons({
      style: {
        color: 'silver',
        label: 'checkout',
        height: 40,
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            description: 'basico',
            amount: {
              value: '20.00'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
      let url ='Procesar.php'
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name + '!');
        console.log(details)
        return fetch(url,{
          method:'post',
          headers:{
            'content-type': 'application/json'
          },
            body: JSON.stringify({
              details:details
            })
        })
      });
    }
    }).render('#paypal-button-container-3');
  </script>

</div>
</div>
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

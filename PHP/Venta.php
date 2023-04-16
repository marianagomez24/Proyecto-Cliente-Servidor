<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Babylon.js App</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AR69R3fIhrYZ7tgA8ACQPUpnZzbnsdvYuFxp24b7so2CoD-MXEGGUOhjdb15aiUUIrts0fQCOP28Z2pV&currency=USD"></script>
</head>
<body>



<div id="paypal-button-container-1">
<h1>Subcripcion gold</h1>
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
    <h1>plan smart</h1>
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
    <h1>plan</h1>
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

</body>
</html>
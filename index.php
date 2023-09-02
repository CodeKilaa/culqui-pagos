<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<script src="https://checkout.culqi.com/js/v4"></script>
  <script>
    Culqi.publicKey = 'pk_test_XBWsfPU0w7KmcLF9';






  /*Culqi.options({
      style: {
        logo: 'https://culqi.com/LogoCulqi.png',
        bannerColor: '', // hexadecimal
        buttonBackground: '', // hexadecimal
        menuColor: '', // hexadecimal
        linksColor: '', // hexadecimal
        buttonText: '', // texto que tomará el botón
        buttonTextColor: '', // hexadecimal
        priceColor: '' // hexadecimal
      }
  });
  */

  const btn_pagar = document.getElementById('btn_pagar');

btn_pagar.addEventListener('click', function (e) {
    // Abre el formulario con la configuración en Culqi.settings y CulqiOptions

        //SETTINGS CULQI
        Culqi.settings({
        title: 'Culqi Store',
        currency: 'PEN',  // Este parámetro es requerido para realizar pagos yape
        amount: 1000,  // Este parámetro es requerido para realizar pagos yape
        //order: 'ord_live_0CjjdWhFpEAZlxlz', // Este parámetro es requerido para realizar pagos con pagoEfectivo, billeteras y Cuotéalo




    //OPCIONES DE PAGO
        Culqi.options({
        lang: "auto",
        installments: false, // Habilitar o deshabilitar el campo de cuotas
        paymentMethods: {
        tarjeta: true,
        yape: true,
        bancaMovil: true,
        agente: true,
        billetera: true,
        cuotealo: false,
        },
    });
    });
    Culqi.open();
    e.preventDefault();
})

  </script>


 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
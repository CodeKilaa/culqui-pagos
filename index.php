<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://checkout.culqi.com/js/v4"></script>
</head>
<body>
    <div class="container text-center">
        <h1>Productos</h1>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="img/polo.jpg" class="card-img-top" alt="Polo Adidas">
                    <div class="card-body">
                        <h5 class="card-title">Polo Adidas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary" id="btn_pagar1">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="img/polo2.jpg" class="card-img-top" alt="Polo Adidas">
                    <div class="card-body">
                        <h5 class="card-title">Polo Adidas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary" id="btn_pagar2">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="img/polo3.jpg" class="card-img-top" alt="Polo Adidas">
                    <div class="card-body">
                        <h5 class="card-title">Polo Adidas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary" id="btn_pagar3">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        Culqi.publicKey = 'pk_test_XBWsfPU0w7KmcLF9';
      
        Culqi.settings({
            title: 'Culqi Store',
            currency: 'PEN',
            amount: 1000,
            order: 'ord_live_0CjjdWhFpEAZlxlz'
        });
      
        Culqi.options({
            lang: "auto",
            installments: false,
            paymentMethods: {
                tarjeta: true,
                yape: true,
                bancaMovil: true,
                agente: true,
                billetera: true,
                cuotealo: false,
            },
        });
      
        const btn_pagar1 = document.getElementById('btn_pagar1');
        const btn_pagar2 = document.getElementById('btn_pagar2');
        const btn_pagar3 = document.getElementById('btn_pagar3');
      
        btn_pagar1.addEventListener('click', function (e) {
            Culqi.open();
            e.preventDefault();
        });

        btn_pagar2.addEventListener('click', function (e) {
            Culqi.open();
            e.preventDefault();
        });

        btn_pagar3.addEventListener('click', function (e) {
            Culqi.open();
            e.preventDefault();
        });
      
        function culqi() {
            if (Culqi.token) {  
                const token = Culqi.token;
                console.log(`Se ha creado el objeto Token: ${token}.`);
            } else if (Culqi.order) {  
                const order = Culqi.order;
                console.log(`Se ha creado el objeto Order: ${order}. para PagoEfectivo`);
            } else {
                console.log(`Error : ${Culqi.error.merchant_message}.`);
            }
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Inventario</title>
</head>

<body>
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card" style="width: 18rem;">
                <img src="/img/inventario.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Manejo de Inventario</h5>
                    <p class="card-text"> Manejo basico de inventario por producto</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Ir a Menu</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

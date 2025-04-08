<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav class = "nav bg-light p-2">
        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Manejo Basico de Inventario</a>
        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
        <a class="nav-link" href="{{ route('movements.index') }}">Movimientos</a>
        <a class="nav-link" href="/">Home</a>
    </nav>
    

<div class="container">
    @yield('content')
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto: {{ $product->name. $product->id }}</title>
    <style>
        tr{
            border:2px solid green;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h2>Informacion detalla del producto {{ $product->name}}</h2>
    <hr>
    <table class="table caption-top">
        <thead>
        <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Unidad de medida</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->code}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->ammount}}</th>
                <th>{{$product->unit}}</th>
            </tr>
        </tbody>
    </table>
</body>
</html>
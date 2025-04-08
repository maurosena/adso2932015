@extends('layouts.plantilla')
@section('title', 'Index Movimientos')
@section('content')

@if (Session::has('error'))
<p style="padding : 10px; background-color : red; color : #fff;">{{ Session::get('error')}}</p>
@endif

    <h5>Listado Principal de Movimientos  <i class="fa-solid fa-cart-flatbed"></i></h5>
     
    <a href="{{route('movements.create')}}" class= "btn btn-outline-primary" role = "button">Agregar <i class="fa-solid fa-floppy-disk"></i> </a>
    <br><br>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Tipo Movimiento</th>
                <th>Cantidad</th>
                <th>Punto Venta</th>
                <th>Fecha Venta</th>
                <th>Producto</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movements as $movement)
                <tr>
                    <th>{{ $movement->type }}</th>
                    <th>{{ $movement->ammount}}</th>
                    <th>{{ $movement->sale_point }}</th>
                    <th>{{ $movement->date_sale}} </th>
                    <th>{{ $movement->product->name}}</th>
                    <th>
                        <a href="" class = "btn btn-outline-success">Editar</a>
                        <a href="" class = "btn btn-outline-danger">Eliminar</a>
                        <a href="" class= "btn btn-outline-primary">PDF</a>
                    </th>
                </tr>
                @endforeach
        </tbody>
    </table>

@endsection

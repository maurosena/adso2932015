@extends('layouts.plantilla')
@section('title', 'Formulario Agregar Producto')
@section('content')

    <div class ="container-5">
        <h4 class="text-center mb-4">Crear Producto</h4>
        <form action ="{{ route('products.store') }}" method="POST">
            @csrf
            <div class = "row">
                <div class="col-md-6 mb-3">
                    <label for="code">Codigo</label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="Codigo Producto">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Producto">
                </div>
                <div class = "row">
                    <div class="col-md-6 mb-3">
                        <label for="ammount">Cantidad</label>
                        <input type="number" name="ammount" id="ammount" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="unit">Unidad</label>
                        <input type="text" name="unit" id="unit" class="form-control"
                            placeholder="Unidad de Medida">
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-outline-primary">Guardar</button>

                    </div>
        </form>



    @endsection

@extends('layouts.plantilla')
@section('title', 'Formulario Agregar Movimiento')
@section('content')

    <h5>Formulario agregar movimientos</h5>

    <div class ="container-5">
        <h4 class="text-center mb-4">Crear Movimiento</h4>
        <form action ="{{ route('movements.store') }}" method="POST">
            @csrf
            <div class = "row">
                <div class="col-md-6 mb-3">
                    <label for="type">Tipo de Movimiento</label>
                    <select name="type" id="type" class="form-control">
                        <option value="" disabled selected>Seleccione tipo de movimiento</option>
                        @foreach ($movements_type as $type)
                            <option value =" {{ $type }}">{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="product">Producto</label>
                    <select name="product" id="product" class="form-control">
                        <option value="" disabled selected>Seleccione un Producto</option>
                        @foreach ($products as $product)
                            <option value = "{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="ammount">Cantidad</label>
                        <input type="number" name="ammount" id="ammount" class="form-control"
                            placeholder="Ingrese un valor numerico">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sale_point">Caja de Venta</label>
                        <select name="sale_point" id="sale_point" class="form-control">
                            <option value="" disabled selected>Seleccione Caja de Venta</option>
                            <option value="caja1">Caja # 1</option>
                            <option value="caja2">Caja # 2</option>
                            <option value="caja3">Caja # 3</option>
                        </select>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="date_sale">Fecha Venta</label>
                    <input type="date" name="date_sale" id="date_sale" class="form-control" placeholder="Ingrese fecha de venta">
                </div>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-outline-primary">Crear</button>
            </div>

        </form>
    @endsection

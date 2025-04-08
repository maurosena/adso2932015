@extends('layouts.plantilla')
@section('title', 'Index Productos')
@section('content')

    <h5>Listado Principal de productos</h5>
    <a href="{{ route('products.create') }}" class="btn btn-outline-primary" role="button">Agregar <i
            class="fa-solid fa-floppy-disk"></i></a>
    <br><br>

    <section>
        <form action = "{{ route('products.search') }}" method="GET">
            <div class="col-md-6 mb-3">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Buscar Producto" aria-label="Search" name="search" value="{{old('search', $search)}}" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
    </section>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <th>{{ $product->code }}</th>
                    <th>{{ $product->name }}</th>
                    <th>{{ $product->ammount }}</th>
                    <th>{{ $product->unit }}</th>
                    <th class="d-flex justify-content-start gap-2">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-success" rol="button"><i
                                class="fa-solid fa-pen"></i></a>
                        <a href="" class="btn btn-outline-info"><i class="fa-solid fa-eye"></i> </a>
                        <form action={{ route('products.destroy', $product) }} method = "POST"
                            onsubmit = "return confirm('Esta seguro de eliminar el producto');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" role="button">Eliminar</button>
                        </form>
                        <a href="{{ route('pdf', $product->id) }}" target="_blank" class="btn btn-outline-primary"><i
                                class="fa-solid fa-file-pdf"></i></a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endsection

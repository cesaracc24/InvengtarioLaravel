@extends('layouts.plantilla')
@section('title','Formulario para crear Productos')
@section('content')
    <div class="container mt-5"> 
        <h4 class="text-center mb-4">Crear Producto</h4>
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="code">Código</label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="Codigo">
                </div>                        
                <div class="col-md-6 mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Producto">
                </div>
            </div>     
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="ammount">Cantidad</label>
                    <input type="number" name="ammount" id="ammount" class="form-control" placeholder="Cantidad">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="unit">Unidad</label>
                    <input type="text" name="unit" id="unit" class="form-control" placeholder="Unidad de medida">
                </div>
            </div>                 
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary" type="submit">Crear</button>
        </form>
    </div>
@endsection
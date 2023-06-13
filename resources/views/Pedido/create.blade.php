{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el titulo --}}
@section('title', 'Pedido')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para agregar Pedidos</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/Pedido/store" method="POST">
        @csrf
        
    <div class="row mb-4">
        <label for="FechaPedido" class="col-md-4 col-form-label text-md-end">Fecha Pedido</label>
        <div class="col-5">
            <input type="date" class="form-control" name="FechaPedido">
            @error('FechaPedido')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="FechaEntrega" class="col-md-4 col-form-label text-md-end">Fecha Entrega</label>
        <div class="col-5">
            <input type="date" class="form-control" name="FechaEntrega">
            @error('FechaEntrega')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="Observaciones" class="col-md-4 col-form-label text-md-end">Observaciones</label>
        <div class="col-5">
            <input type="text" class="form-control" name="Observaciones">
            @error('Observaciones')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="Id_cliente" class="col-md-4 col-form-label text-md-end">Id_cliente</label>
        <div class="col-5">
            <input type="text" class="form-control" name="Id_cliente">
            @error('Id_cliente')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
            <br>
            <button class="btn btn-primary">Guardar</button>
        </div>
    </div>

    </div>
    </form>

</div>
@endsection
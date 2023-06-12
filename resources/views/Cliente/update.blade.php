{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el titulo --}}
@section('title', 'Cliente')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Actualizar</h1>
<h5 class="text-center">Formulario para Actualizar Clientes</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/Cliente/update/{{$cliente->Id_Cliente}}" method="POST">
        @csrf
        @method('PUT')


    <div class="row mb-4">
        <label for="Nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>
        <div class="col-5">
            <input type="text" class="form-control" name="Nombre" value="{{$cliente->Nombre}}">
            @error('Nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="Apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>
        <div class="col-5">
            <input type="text" class="form-control" name="Apellido" value="{{$cliente->Apellido}}">
            @error('Apellido')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="Fecha_Naci" class="col-md-4 col-form-label text-md-end">Fecha de Nacimiento</label>
        <div class="col-5 mb-4">
            <input type="date" class="form-control" name="Fecha_Nac" value="{{$cliente->Fecha_Nac}}">
            @error('Fecha_Nac')
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
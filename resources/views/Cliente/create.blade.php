{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el titulo --}}
@section('title', 'Cliente')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para agregar Clientes</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/Cliente/store" method="POST">
        @csrf
        
    <div class="row mb-4">
        <label for="Nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
        <div class="col-5">
            <input type="text" class="form-control" name="Nombre">
            @error('Nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="Apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>
        <div class="col-5">
            <input type="text" class="form-control" name="Apellido">
            @error('Apellido')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-4">
        <label for="Fecha_Naci" class="col-md-4 col-form-label text-md-end">{{ __('Fecha Nacimiento') }}</label>
        <div class="col-5 mb-4">
            <input type="date" class="form-control" name="Fecha_Nac">
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
{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el titulo --}}
@section('title', 'Cliente')

{{-- Definimos el contenido --}}
@section('content')
<h1 class="text-center">Actualizar</h1>
<h5 class="text-center">Formulario para Actualizar Pididos</h5>
<hr>
<br>
<br>
<div class="container">
    
    <form action="/Pedido/update/{{$pedido->Id_Pedido}}" method="POST">
        @csrf
        @method('PUT')
    
        <!-- Campo de Fecha de Pedido -->
        <div class="row mb-4">
            <label for="FechaPedido" class="col-md-4 col-form-label text-md-end">Fecha de Pedido</label>
            <div class="col-5">
                <input type="date" class="form-control" name="FechaPedido" value="{{$pedido->FechaPedido}}">
                @error('FechaPedido')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <!-- Campo de Fecha de Entrega -->
        <div class="row mb-4">
            <label for="FechaEntrega" class="col-md-4 col-form-label text-md-end">Fecha de Entrega</label>
            <div class="col-5">
                <input type="date" class="form-control" name="FechaEntrega" value="{{$pedido->FechaEntrega}}">
                @error('FechaEntrega')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <!-- Campo de Observaciones -->
        <div class="row mb-4">
            <label for="Observaciones" class="col-md-4 col-form-label text-md-end">Observaciones</label>
            <div class="col-5">
                <input type="text" class="form-control" name="Observaciones" value="{{$pedido->Observaciones}}">
                @error('Observaciones')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <!-- Campo del cliente y el pedido asociado -->
        <div class="row mb-4">
            <label for="Id_Cliente" class="col-md-4 col-form-label text-md-end">Cliente</label>
            <div class="col-5">
                <select class="form-control" name="Id_Cliente">
                    @foreach($clientes as $cliente)
                        <option value="{{$cliente->Id_Cliente}}" {{($cliente->Id_Cliente == $pedido->Id_Cliente) ? 'selected' : ''}}>
                            {{$cliente->Nombre}} {{$cliente->Apellido}}
                        </option>
                    @endforeach
                </select>
                @error('Id_Cliente')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <button class="btn btn-primary">Guardar</button>
    </form>
                
</div>
@endsection
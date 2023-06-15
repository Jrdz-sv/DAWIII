@extends('layouts.app')

@section('title', 'Pedidos')

@section('content')

    <h1 class="text-center">Pedido</h1>
    <h5 class="text-center">Listado de Pedidos</h5>
    <hr>
    {{-- Boton de agregar cliente --}}
    <br>
    <div class="container mx-auto">
        <a class="btn btn-success btn-sm" href="/Pedido/create">Añadir Pedido</a></div>
    <br>

    <table class="container table table-hover table-bordered mt-2">
        {{-- Encabezados --}}
        <tr class="table-secondary ">
            <td>C&oacute;digo</td>
            <td class="text-center">Fecha Pedido</td>
            <td class="text-center">Fecha Entrega</td>
            <td class="text-center">Observaciones</td>
            <td colspan="2" class="text-center">Cliente</td>
            <td class="text-center">Acciones</td>
        </tr>

        @foreach ($pedido as $item)
            <tr>
                <td>{{$item->Id_Pedido}}</td>
                <td class="text-center">{{$item->FechaPedido}}</td>
                <td class="text-center">{{$item->FechaEntrega}}</td>
                <td class="text-center">{{$item->Observaciones}}</td>
                <td>{{$item->Nombre}}</td>
                <td>{{$item->Apellido}}</td>
                <td class="text-center">
                    <form action="/Pedido/destroy/{{$item->Id_Pedido}}" method="POST">
                        {{-- Update buttton --}}
                        <a class="btn btn-primary btn-sm" href="/Pedido/edit/{{$item->Id_Pedido}}">Modificar</a>
                        @csrf
                        @method('DELETE')
                        {{-- Delete button --}}
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>    
                </td>
            </tr>
    @endforeach
        
    </table>
@endsection
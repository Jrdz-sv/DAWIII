@extends('layouts.app')

@section('title', 'Pedidos')

@section('content')

    <h1 class="text-center">Pedidoo</h1>
    <h5 class="text-center">Listado de Pedidos</h5>
    <hr>
    {{-- Boton de agregar cliente --}}
    <br>
    <div class="container mx-auto">
        <a class="btn btn-success btn-sm" href="/Cliente/create">Añadir Cliente</a></div>
    <br>

    <table class="container table table-hover table-bordered mt-2">
        {{-- Encabezados --}}
        <tr class="table-secondary ">
            <td>C&oacute;digo</td>
            <td>Fecha Pedido</td>
            <td>Fecha Entrega</td>
            <td>Observaciones</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Acciones</td>
        </tr>

        @foreach ($pedido as $item)
        <tr>
            <td>{{$item->Id_Pedido}}</td>
            <td>{{$item->FechaPedido}}</td>
            <td>{{$item->FechaEntrega}}</td>
            <td>{{$item->Observaciones}}</td>
            <td>{{$item->Nombre}}</td>
            <td>{{$item->Apellido}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/Pedido/edit/{{$item->Id_Cliente}}">Modificar</a>
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/Pedido/destroy/{{$item->Id_Cliente}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
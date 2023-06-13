@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1 class="text-center">Cliente</h1>
    <h5 class="text-center">Listado de Clientes</h5>
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
            <td class="text-center">Nombre</td>
            <td class="text-center">Apellido</td>
            <td class="text-center">Fecha Nacimiento</td>
            <td class="text-center">Acciones</td>
        </tr>

        @foreach ($cliente as $item)
        <tr>
            <td >{{$item->Id_Cliente}}</td>
            <td class="text-center">{{$item->Nombre}}</td>
            <td class="text-center">{{$item->Apellido}}</td>
            <td class="text-center">{{$item->Fecha_Nac}}</td>
            <td class="text-center">
                <form action="/Cliente/destroy/{{$item->Id_Cliente}}" method="POST">
                    <a class="btn btn-primary btn-sm" href="/Cliente/edit/{{$item->Id_Cliente}}">Modificar</a>
                    @csrf
                    @method('DELETE')
                    {{-- Delete with submit and ID_Cliente using method POST in a form --}}
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>                                                                
            </td>
        </tr>
        @endforeach
    </table>
@endsection

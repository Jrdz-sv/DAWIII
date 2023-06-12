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
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Fecha Nacimiento</td>
            <td>Acciones</td>
        </tr>

        @foreach ($cliente as $item)
        <tr>
            <td>{{$item->Id_Cliente}}</td>
            <td>{{$item->Nombre}}</td>
            <td>{{$item->Apellido}}</td>
            <td>{{$item->Fecha_Nac}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/Cliente/edit/{{$item->Id_Cliente}}">Modificar</a>
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/Cliente/destroy/{{$item->Id_Cliente}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@section('scripts')
    {{-- SweetAlert
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    {{-- <script src="{{asset('js/product.js')}}"></script>  --}}
@endsection
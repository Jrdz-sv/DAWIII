<?php

namespace App\Http\Controllers;

use App\Models\PedidoModel;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $pedido = PedidoModel::select(
            "pedido.Id_Pedido",
            "pedido.FechaPedido",
            "pedido.FechaEntrega",
            "cliente.Nombre as Id_cliente"
        )->join("cliente", "cliente.Id_Cliente", "=", "pedido.Id_cliente")->get();

        return view('/Pedido/show')->with(['pedido' => $pedido]);
    }
// Id_cliente referencia en la tabla pedido 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

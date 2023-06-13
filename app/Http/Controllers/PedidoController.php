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
            "cliente.Id_Cliente as ID",
            "cliente.Nombre as Nombre",
            "cliente.Apellido as Apellido"
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
        $pedido = PedidoModel::all();

        return view('/Pedido/create')->with(['pedido' => $pedido]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'FechaPedido' => 'required',
            'FechaEntrega' => 'required',
            'Observaciones' => 'required',
            'Id_cliente'=>'required'
        ]);

        //Insertar la informacion
        PedidoModel::create($data);

        //Redireccionar
        return redirect('Pedido/show');
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
    public function destroy( $id)
    {
        //
        // $cliente = PedidoModel::find($id);
        $pedido=PedidoModel::find($id);

        $pedido->delete();

        return redirect('/Pedido/show');;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PedidoModel;
use App\Models\ClienteModel;
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
        $pedidos = PedidoModel::select(
            "pedido.Id_Pedido",
            "pedido.FechaPedido",
            "pedido.FechaEntrega",
            "pedido.Observaciones",
            "cliente.Nombre as Nombre",
            "cliente.Apellido as Apellido"
        )->join("cliente", "cliente.Id_Cliente", "=", "pedido.Id_cliente")->get();
    
        return view('Pedido/show')->with(['pedido' => $pedidos]);
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
    public function edit($Id_Pedido)
    {
        $pedido = PedidoModel::find($Id_Pedido);
        $clientes = ClienteModel::all();

        return view('Pedido/update', compact('pedido', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Id_Pedido)
    {
        $data = $request->validate([
            'FechaPedido' => 'required',
            'FechaEntrega' => 'required',
            'Observaciones' => 'nullable',
            'Id_Cliente' => 'required',
        ]);

        $pedido = PedidoModel::find($Id_Pedido);

        $pedido->FechaPedido = $data['FechaPedido'];
        $pedido->FechaEntrega = $data['FechaEntrega'];
        $pedido->Observaciones = $data['Observaciones'];
        $pedido->Id_Cliente = $data['Id_Cliente'];
        $pedido->save();

        return redirect('/Pedido/show');
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

        return redirect('/Pedido/show');
    }
}

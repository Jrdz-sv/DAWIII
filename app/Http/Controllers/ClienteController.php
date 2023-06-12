<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
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
        $cliente = ClienteModel::all();

        //retornar vista del create (formulario)
        return view('/Cliente/show')->with(['cliente'=>$cliente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cliente = ClienteModel::all();

        //retornar vista del create (formulario)
        return view('/Cliente/create')->with(['cliente'=>$cliente]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Fecha_Nac' => 'required'
        ]);

        //Insertar la informacion
        ClienteModel::create($data);

        //Redireccionar
        return redirect('Cliente/show');
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

     
    public function edit(ClienteModel $cliente)
    {
        //
        $cliente = ClienteModel::all();
        return view('/Cliente/update')->with(['cliente' => $cliente]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClienteModel $client)
    {
        //
        $data = request()->validate([
            'Id_Cliente'=> 'required',
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Fecha_Nac' => 'required'
        ]);

        $client->Id_Cliente = $data['Id_Cliente'];
        $client->Nombre = $data['Nombre'];
        $client->Apellido = $data['Apellido'];
        $client->Fecha_Nac = $data['Fecha_Nac'];
        $client->updated_at = now();

        $client->save();

        return redirect('/Cliente/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        //Eliminar producto con id que recibimos
        ClienteModel::destroy($id);

        //Retornar una respuesta json
        return response()->json(array('res' => true));
    }
}

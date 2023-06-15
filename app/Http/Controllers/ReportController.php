<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\PedidoModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function cliente_pedidoreport()
    {
        //extraer informacion 
        $data = PedidoModel::select(
            "pedido.Id_Pedido",
            "pedido.FechaPedido",
            "pedido.FechaEntrega",
            "pedido.Observaciones",
            "cliente.Nombre as Nombre",
            "cliente.Apellido as Apellido"
        )->join("cliente", "cliente.Id_Cliente", "=", "pedido.Id_cliente")->get();

        //Generar reporte
        $pdf = Pdf::loadView('/reports/Clientepedidos_Reports', compact('data'));

        //modicar los tamaños y orientacion
        $pdf->setPaper('A4', 'landscape');

        //Retornar el reporte
        return $pdf->stream('cliente_pedidos.pdf');
    }


    public function clientereport()
    {
        //extraer informacion 
        $dataC = ClienteModel::select(
            "Id_Cliente",
            "Nombre",
            "Apellido",
            "Fecha_Nac",
        )->get();

        //Generar reporte
        $pdf = Pdf::loadView('/reports/cliente_report', compact('dataC'));

        //modicar los tamaños y orientacion
        $pdf->setPaper('A4', 'landscape');

        //Retornar el reporte
        return $pdf->stream('clientes.pdf');
    }

    

    public function pedidoreport()
    {
        //extraer informacion 
        $data = PedidoModel::select(
            "Id_Pedido",
            "FechaPedido",
            "FechaEntrega",
            "Observaciones",
        )->get();

        //Generar reporte
        $pdf = Pdf::loadView('/reports/pedidos_reports', compact('data'));

        //modicar los tamaños y orientacion
        $pdf->setPaper('A4', 'landscape');

        //Retornar el reporte
        return $pdf->stream('pedidos.pdf');
    }
}

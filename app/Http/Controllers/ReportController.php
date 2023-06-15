<?php

namespace App\Http\Controllers;

use App\Models\PedidoModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function pedidoreport()
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
        $pdf = Pdf::loadView('/reports/pedido_report', compact('data'));

        //modicar los tamaños y orientacion
        $pdf->setPaper('A4', 'landscape');

        //Retornar el reporte
        return $pdf->stream('pedidos.pdf');
    }
}

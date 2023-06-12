<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    use HasFactory;
    //Nombre de la tabla
    protected $table = 'pedido';

    //Llave primaria
    protected $primaryKey = 'Id_Pedido';

    //Campos de asignacion o campos de mi tabla
    protected $fillable = ['FechaPedido', 'FechaEntrega', 'Observaciones','Id_cliente'];
}

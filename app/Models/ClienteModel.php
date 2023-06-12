<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;
    //Nombre de la tabla
    protected $table = 'cliente';

    //Llave primaria
    protected $primaryKey = 'Id_Cliente';

    //Campos de asignacion o campos de mi tabla
    protected $fillable = ['Nombre', 'Apellido', 'Fecha_Nac'];
    
}

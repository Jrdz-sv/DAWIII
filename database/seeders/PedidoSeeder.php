<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(

            [
                'FechaPedido'=>'2023-01-02',
                'FechaEntrega'=>'2023-01-07',
                'Observaciones'=>'Sin observaciones',
                'Id_Cliente'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'FechaPedido'=>'2023-01-15',
                'FechaEntrega'=>'2023-02-01',
                'Observaciones'=>'Sin observaciones',
                'Id_Cliente'=>'2',
                'created_at'=>Carbon::now()
            ],
            [
                'FechaPedido'=>'2023-03-20',
                'FechaEntrega'=>'2023-03-25',
                'Observaciones'=>'N',
                'Id_Cliente'=>'3',
                'created_at'=>Carbon::now()
            ],
            [
                'FechaPedido'=>'2023-01-02',
                'FechaEntrega'=>'2023-01-07',
                'Observaciones'=>'N',
                'Id_Cliente'=>'4',
                'created_at'=>Carbon::now()
            ],
            [

                'FechaPedido'=>'2023-04-02',
                'FechaEntrega'=>'2023-04-07',
                'Observaciones'=>'N',
                'Id_Cliente'=>'5',
                'created_at'=>Carbon::now()    
            ],
            [
                
                'FechaPedido'=>'2023-04-06',
                'FechaEntrega'=>'2023-04-08',
                'Observaciones'=>'N',
                'Id_Cliente'=>'6',
                'created_at'=>Carbon::now()
            ],
            [
                
                'FechaPedido'=>'2023-04-06',
                'FechaEntrega'=>'2023-04-09',
                'Observaciones'=>'N',
                'Id_Cliente'=>'7',
                'created_at'=>Carbon::now()
            ],
            [ 
                'FechaPedido'=>'2023-04-10',
                'FechaEntrega'=>'2023-04-15',
                'Observaciones'=>'N',
                'Id_Cliente'=>'8',
                'created_at'=>Carbon::now()
            ],
            [
                'FechaPedido'=>'2023-04-11',
                'FechaEntrega'=>'2023-04-15',
                'Observaciones'=>'N',
                'Id_Cliente'=>'9',
                'created_at'=>Carbon::now()
            ],
            [
                'FechaPedido'=>'2023-04-11',
                'FechaEntrega'=>'2023-04-15',
                'Observaciones'=>'N',
                'Id_Cliente'=>'10',
                'created_at'=>Carbon::now()
            ],
            [
                'FechaPedido'=>'2023-05-02',
                'FechaEntrega'=>'2023-05-07',
                'Observaciones'=>'N',
                'Id_Cliente'=>'11',
                'created_at'=>Carbon::now()
            ],
            [
                
                'FechaPedido'=>'2023-05-05',
                'FechaEntrega'=>'2023-05-10',
                'Observaciones'=>'N',
                'Id_Cliente'=>'12',
                'created_at'=>Carbon::now()
            ],
        );
        
        //Insert data into table
        DB::table('pedido')->insert($data);
    }
}

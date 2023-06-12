<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(

            [
                'Nombre' => 'Estefany',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Benitez',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '2003-10-01',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Azucena',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Vasquez',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '2003-09-01',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Carlos',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Tobar',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1999-07-01',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Luka',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Modric',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1980-11-09',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Lucas',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Vasquez',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1994-12-15',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Marco',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Asencio',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1993-08-06',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Fernando',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Alonzo',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1981-05-16',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Checo',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Perez',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1991-02-13',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Carlo',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Ancelotti',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1960-10-13',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Lionel',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Messi',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1980-12-05',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Iker',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Casillas',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '1981-05-20',
                'created_at'=>Carbon::now()
            ],
            [
                'Nombre' => 'Rodry',
                'created_at'=>Carbon::now(),
                'Apellido' => 'Goes',
                'created_at'=>Carbon::now(),
                'Fecha_Nac' => '2001-01-09',
                'created_at'=>Carbon::now()
            ],
        );
        
        //Insert data into table
        DB::table('cliente')->insert($data);
        
    }
}

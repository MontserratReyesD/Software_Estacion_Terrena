<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class VarSenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('varsens')->insert(
        [
            [
                'id' => 1,
                'sensor_id' => 1, //gy80
                'variable_id' => 2, //temperatura
                'indice' => 1, 
            ],                
            [
                'id' => 2,
                'sensor_id' => 1, //gy80
                'variable_id' => 4,//ax
                'indice' => null,
            ],
            [
                'id' => 3,
                'sensor_id' => 1,//gy80
                'variable_id' => 5,//ay
                'indice' => null, 
            ],
            [
                'id' => 4,
                'sensor_id' => 1,//gy80
                'variable_id' =>6,//az
                'indice' => null,
            ],
            [
                'id' => 5,
                'sensor_id' => 1,//gy80
                'variable_id' => 7, //pressure
                'indice' => null,
            ],
            [
                'id' => 6,
                'sensor_id' => 1,//gy80
                'variable_id' => 10, //altitud
                'indice' => 1, 
            ],
            [
                'id' => 7,
                'sensor_id' => 1,//gy80
                'variable_id' => 14, //girox
                'indice' => null,
            ],
            [
                'id' => 8,
                'sensor_id' => 1,//gy80
                'variable_id' => 15, //giroy
                'indice' => null, 
            ],
            [
                'id' => 9,
                'sensor_id' => 1,//gy80
                'variable_id' => 16, //giroz
                'indice' => null, 
            ],
            [
                'id' => 10,
                'sensor_id' => 2,//DTH11
                'variable_id' => 1, //   humedad             
                'indice' => null, 
            ],
            [
                'id' => 11,
                'sensor_id' => 2,//DTH11
                'variable_id' => 2,//temperatura
                'indice' => null,
            ],
            [
                'id' => 12,
                'sensor_id' => 2,//DTH11
                'variable_id' => 3,//sensacion
                'indice' => null, 
            ],
            [
                'id' => 13,
                'sensor_id' => 3, //GPS
                'variable_id' => 8, //latitud
                'indice' => null, 
            ],
            [
                'id' => 14,
                'sensor_id' => 3, //GPS
                'variable_id' => 9,//longitud
                'indice' => null, 
            ],
            [
                'id' => 15,
                'sensor_id' => 3, //GPS
                'variable_id' => 10, //altitud
                'indice' => null, 
            ],
            [
                'id' => 16,
                'sensor_id' => 3, //GPS
                'variable_id' => 11,//velocidad
                'indice' => null, 
            ],
            [
                'id' => 17,
                'sensor_id' => 3, //GPS
                'variable_id' => 12,//satelites
                'indice' => null, 
            ],
            [
                'id' => 18,
                'sensor_id' => 4, //GP2Y1010
                'variable_id' => 13,//polvo
                'indice' => null, 
            ],
            [
                'id' => 19,
                'sensor_id' => 1,//gy80
                'variable_id' => 17, //mx
                'indice' => null,
            ],
            [
                'id' => 20,
                'sensor_id' => 1,//gy80
                'variable_id' => 18, //mx
                'indice' => null, 
            ],
            [
                'id' => 21,
                'sensor_id' => 1,//gy80
                'variable_id' => 19, //mx
                'indice' => null, 
            ],
            [
                'id' => 22,
                'sensor_id' => 5,//280
                'variable_id' => 20, //altitude
                'indice' => null, 
            ],
        ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class VarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variables')->insert([
            [
                'id' => 1,
                'nombre' => 'humedad',
                'descripcion' => '',
            ],                
            [
                'id' => 2,
                'nombre' => 'temperatura',
                'descripcion' => '',
            ],
            [
                'id' => 3,
                'nombre' => 'sensation',
                'descripcion' => 'sensación termica',
            ],
            [
                'id' => 4,
                'nombre' => 'ax',
                'descripcion' => 'Aceleración en x',
            ],
            [
                'id' => 5,
                'nombre' => 'ay',
                'descripcion' => 'Aceleración en y',
            ],
            [
                'id' => 6,
                'nombre' => 'az',
                'descripcion' => 'Aceleración en z',
            ],
            [
                'id' => 7,
                'nombre' => 'pressure',
                'descripcion' => 'presión barométrica',
            ],
            [
                'id' => 8,
                'nombre' => 'latitud',
                'descripcion' => '',
            ],
            [
                'id' => 9,
                'nombre' => 'longitud',
                'descripcion' => 'GPS',
            ],
            [
                'id' => 10,
                'nombre' => 'altitud',
                'descripcion' => 'GPS',
            ],
            [
                'id' => 11,
                'nombre' => 'velocidad',
                'descripcion' => 'GPS',
            ],
            [
                'id' => 12,
                'nombre' => 'satelites',
                'descripcion' => 'Número de satelites',
            ],
            [
                'id' => 13,
                'nombre' => 'dustDensity',
                'descripcion' => 'Densidad de polvo',
            ],
            [
                'id' => 14,
                'nombre' => 'gx',
                'descripcion' => 'Giróscopo en el eje x',
            ],
            [
                'id' => 15,
                'nombre' => 'gy',
                'descripcion' => 'Giróscopo en el eje y',
            ],
            [
                'id' => 16,
                'nombre' => 'gz',
                'descripcion' => 'Giróscopo en el eje z',
            ],
             [
                'id' => 17,
                'nombre' => 'mx',
                'descripcion' => 'magnetometro en x',
            ],
            [
                'id' => 18,
                'nombre' => 'my',
                'descripcion' => 'magnetometro en y',
            ],
            [
                'id' => 19,
                'nombre' => 'mz',
                'descripcion' => 'magnetometro en z',
            ],
            [
                'id' => 20,
                'nombre' => 'altitude',
                'descripcion' => '280',
            ],
        ]
        );
    }
}

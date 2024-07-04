<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sensores')->insert([
            [
                'id' => 1,
                'nombre' => 'MPU9250',
                'descripcion' => 'Es un módulo compacto que incluye un giroscopio, acelerómetro, brújula digital, y un sensor de presión barométrica / temperatura.',
            ],                
            [
                'id' => 2,
                'nombre' => 'DHT22',
                'descripcion' => 'Módulo de censado de temperatura y humedad relativa.',
            ],
            [
                'id' => 3,
                'nombre' => 'GP735',
                'descripcion' => 'Módulo de localización por GPS.',
            ],
            [
                'id' => 4,
                'nombre' => 'GP2Y1010',
                'descripcion' => 'Mide la concentración de polvo en el aire usando una luz infrarroja, incluso partículas humo muy finas‎.',
            ],
                        [
            'id' => 5,
                'nombre' => 'BME208',
                'descripcion' => 'Senor de presión y temperatura.',
            ],
        ]
        );
    }
}

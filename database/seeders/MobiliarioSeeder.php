<?php

namespace Database\Seeders;

use App\Models\Mobiliario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobiliarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mobiliario::create(
            ['mueble' => 'Sillas'],
        );
        Mobiliario::create(
            ['mueble' => 'Escritorio'],
        );
        Mobiliario::create(
            ['mueble' => 'Ventilador'],
        );
    }
}

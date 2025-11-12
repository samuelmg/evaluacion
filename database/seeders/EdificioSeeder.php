<?php

namespace Database\Seeders;

use App\Models\Aula;
use App\Models\Edificio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserta información utilizando Query Builder
        // DB::table('edificios')->insert([
        //     ['nombre' => 'Edificio A', 'niveles' => 5],
        //     ['nombre' => 'Edificio B', 'niveles' => 10],
        //     ['nombre' => 'Edificio C', 'niveles' => 3],
        // ]);

        // Inserta información utilizando factories
        Edificio::factory()
            ->has(Aula::factory()->count(15))
            ->count(10)
            ->create();

        // Inserta información utilizando el modelo
        // Edificio::create([
        //     'nombre' => 'Edificio Especial',
        //     'niveles' => 15,
        // ]);
    }
}

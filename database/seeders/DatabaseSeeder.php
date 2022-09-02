<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;
use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Ingreso;
use App\Models\Pago;
use App\Models\Perfil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Etiqueta::factory(10)->create();
        Categoria::factory(10)->create();
        Item::factory(10)->create();
        Pago::factory(10)->create();
        Perfil::factory(10)->create();
        Ingreso::factory(10)->create();
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\Entrada;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        Entrada::factory(10)->create();
        
        /* foreach (Entrada::all() as $entrada) {
            $usuarios = User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $entrada->usuarios()->attach($usuarios);
        }
        User::factory(3)->create();
         */
    }
}

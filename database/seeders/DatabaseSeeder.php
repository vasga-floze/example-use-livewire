<?php

namespace Database\Seeders;
//hacemos referencia a la entidad a usar
use App\Models\Post;

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
        //Aqui decimos, usa esta entidad para crear tantos datos falsos
        //creamos 50 usuarios
        Post::factory(50)->create();
    }
}

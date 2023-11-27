<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Matela;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $matela = Matela::factory(4)->create([
            'title' => 'Matelas Confort+',
            'marque' => 'EPEDA',
            'cover'=> 'https://www.lelit.fr/wp-content/uploads/2021/05/matelas-SAVOY.png'
            // 'prix'=> fake ()->numberBetween(750,1500),
            // 'discount' => fake()->numberBetween(10,90),
            // 'prix'=> '',
            // 'discount'=> '',
            // 'image'=>'https://www.lelit.fr/wp-content/uploads/2021/05/matelas-SAVOY.png',

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

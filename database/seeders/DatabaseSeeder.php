<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Codice vecchio già presente:
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // codice che esegue il nostro seeder:
        $this->call(TrainsTableSeeder::class);  //chiamo il metodo call() per eseguire il nostro seeder, a cui a sua volta gli passo la classe TrainsTableSeeder (con ::class)
    }
}

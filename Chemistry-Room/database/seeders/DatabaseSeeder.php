<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ErabiltzaileSeeder::class);
        $this->call(ArgazkiakSeeder::class);
        $this->call(PistakSeeder::class);
        $this->call(Froga1Seeder::class);
        $this->call(Froga2Seeder::class);
        $this->call(Froga3Seeder::class);
        $this->call(Froga4Seeder::class);
        $this->call(Froga5Seeder::class);
        $this->call(Froga6Seeder::class);
    }
}

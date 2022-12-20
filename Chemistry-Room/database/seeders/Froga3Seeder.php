<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Froga3;

class Froga3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $froga3 = new Froga3();
        $froga3->izena = 'Bacillus cereus';
        $froga3->id_pista = '3';
        $froga3->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Froga6;

class Froga6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $froga6 = new Froga6();
        $froga6->izena = 'Henri Moissan';
        $froga6->emaitza = 'F1886';
        $froga6->zhitz = '5';
        $froga6->id_pista = '6';
        $froga6->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Froga5;

class Froga5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $froga5 = new Froga5();
        $froga5->izena = 'Rockwell';
        $froga5->taldea = 'ANÁLISIS';
        $froga5->id_pista = '5';
        $froga5->save();
    }
}

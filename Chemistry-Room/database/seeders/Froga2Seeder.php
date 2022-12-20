<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Froga2;


class Froga2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $froga2 = new Froga2();
        $froga2->izena = 'Formaldehído';
        $froga2->argazkia = 'El_Camino_De_Los_Reyes.jpg';
        $froga2->id_pista = '2';
        $froga2->save();
    }
}

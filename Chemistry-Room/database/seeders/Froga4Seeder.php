<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Froga4;

class Froga4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $froga4 = new Froga4();
        $froga4->galdera = 'Ag + HNO3 = AgNO3 + NO2 + H2O';
        $froga4->erantzuna = 'Ag + 2HNO3 → AgNO3 + NO2 + H2O';
        $froga4->id_pista = '4';
        $froga4->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Froga1;

class Froga1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $froga1 = new Froga1();
        $froga1->bideak = 'PCA';
        $froga1->ezaugarriak = 'Recuento de mesófilos, aerobios y heterótrofos.';
        $froga1->id_pista = '1';
        $froga1->save();
    }
}

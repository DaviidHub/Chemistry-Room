<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pistak;

class PistakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pista = new Pistak();
        $pista->pista = 'Hola';
        $pista->save();

        $pista2 = new Pistak();
        $pista2->pista = 'Hola';
        $pista2->save();

        $pista3 = new Pistak();
        $pista3->pista = 'Hola';
        $pista3->save();

        $pista4 = new Pistak();
        $pista4->pista = 'Hola';
        $pista4->save();

        $pista5 = new Pistak();
        $pista5->pista = 'Hola';
        $pista5->save();

        $pista6 = new Pistak();
        $pista6->pista = 'Hola';
        $pista6->save();
    }
}

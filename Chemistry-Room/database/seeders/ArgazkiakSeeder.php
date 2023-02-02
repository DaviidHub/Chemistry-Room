<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Argazkiak;


class ArgazkiakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Argazkia = new Argazkiak();
        $Argazkia->izena = 'Lola';
        $Argazkia->Argazkia = '1675076386-quimica.png';
        $Argazkia->save();
    }
}

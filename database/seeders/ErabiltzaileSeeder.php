<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Erabiltzaileak;

class ErabiltzaileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $erabiltzaile = new Erabiltzaileak();
        $erabiltzaile->izena = 'Lola';
        $erabiltzaile->abizenak = 'Tortugas';
        $erabiltzaile->mail = 'lolatortuga@gmail.com';
        $erabiltzaile->pasahitza = 'Inf041';
        $erabiltzaile->rol = 'Admin';
        $erabiltzaile->save();
    }
}

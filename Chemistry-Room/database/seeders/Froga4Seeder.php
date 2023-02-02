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
        $froga4->erantzuna = 'Ag + 2HNO3 = AgNO3 + NO2 + H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'Ag2S + HNO3 = AgNO3 + NO2 + S + H2O';
        $froga4->erantzuna = 'Ag2S + 4HNO3 = 2AgNO3 + 2NO2 + S + 2H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'As + HNO3 + H2O = H3AsO4 + NO';
        $froga4->erantzuna = '3As + 5HNO3 + 2H2O = 3H3AsO4 + 5NO';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'As2S5 + HNO3 = H3AsO4 + NO2 + S + H2O';
        $froga4->erantzuna = 'As2S5 + 10 HNO3 = 2H3AsO4 + 10NO2 + 5S + 2H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'Bi2S3 + HNO3 = Bi(NO3)3 + NO + S + H2O';
        $froga4->erantzuna = 'Bi2S3 + 8HNO3 = Bi(NO3)3 + NO + S + H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'CdS + HNO3 = Cd(NO3)2 + S + NO + H2O';
        $froga4->erantzuna = '3CdS + 8HNO3 = Cd(NO3)2 + S + NO + H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'Cu + HNO3 = Cu(NO3)2 + NO + H2O';
        $froga4->erantzuna = '3Cu + 8HNO3 = 3Cu(NO3)2 + 2NO + 4H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'HNO3 + Cu2O = Cu(NO3)2 + NO + H2O';
        $froga4->erantzuna = '14HNO3 + 3Cu2O = 6 Cu(NO3)2 + 2NO + 7H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'Mg + HNO3 = Mg(NO3)2 + N2 + H2O';
        $froga4->erantzuna = '5Mg + 12HNO3 = 5Mg(NO3)2 + N2 + 6H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'PbS + HNO3 = Pb(NO3)2 + NO + S + H2O';
        $froga4->erantzuna = '3PbS + 8HNO3 = 3Pb(NO3)2 + 2NO + 3S + 4H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'Sn + HNO3 = SnO2 + NO2 + H2O';
        $froga4->erantzuna = 'Sn + 4HNO3 = SnO2 + 4NO2 + 2H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'I2 + HNO3 = HIO3 + NO2 + H2O';
        $froga4->erantzuna = 'I2 + 10HNO3 = 2HIO3 + 10NO2 + 4H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'P4 + HNO3 + H2O = H3PO4 + NO';
        $froga4->erantzuna = '3P4 + 20HNO3 + 8H2O = 12H3PO4 + 20NO';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'H2S + HNO3 = NO + S + H2O';
        $froga4->erantzuna = '3H2S + 2HNO3 = 2NO + 3S + 4H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'S + HNO3 = H2SO4 + NO2 + H2O';
        $froga4->erantzuna = 'S + 6HNO3 = H2SO4 + 6NO2 + 2H2O';
        $froga4->medio = 'acido';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'Al + KMnO4 = MnO2 + AlK(OH)4';
        $froga4->erantzuna = 'Al + KMnO4 + 2H2O = MnO2 + AlK(OH)4';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'KBr + KMnO4 = MnO2 + KBrO3';
        $froga4->erantzuna = 'KBr + 2KMnO4 + H2O = 2MnO2 + KBrO3 + 2KOH';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'KMnO4 + CH3COH = CH3COOH + MnO2 + KOH';
        $froga4->erantzuna = '2KMnO4 + 3CH3COH + H2O = 3CH3COOH + 2MnO2 + 2KOH';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'KMnO4 + H2O + CH3CH2CHO = MnO2 + CH3CH2COOH + KOH';
        $froga4->erantzuna = '2KMnO4 + H2O + 3CH3CH2CHO = 2MnO2 + 3CH3CH2COOH + 2KOH';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'KMnO4 + KCN = MnO2 + KCNO';
        $froga4->erantzuna = '2KMnO4 + 3KCN + H2O = 2MnO2 + 3KCNO + 2KOH';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'MnO4- + C2O42- = MnO2 + CO2';
        $froga4->erantzuna = '2MnO4- + 3C2O42- + 4H2O = 2MnO2 + 6CO2 + 8OH-';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'MnO4- + SO32- = MnO2 + SO42-';
        $froga4->erantzuna = '2MnO4- + 3SO32- + H2O = 2MnO2 + 3SO42- + 2OH-';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'H2O2 + KMnO4 = MnO2 + O2 + KOH + H2O';
        $froga4->erantzuna = '3H2O2 + 2KMnO4 = 2MnO2 + 3O2 + 2KOH + 2H2O';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'MnO4- + H2O + NO2- = MnO2(s) + NO3- + OH-';
        $froga4->erantzuna = '2MnO4- + H2O + 3NO2- = 2MnO2 + 3NO3- + 2OH-';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();

        $froga4 = new Froga4();
        $froga4->galdera = 'H2O2 + KMnO4 = MnO2 + KOH + O2 + H2O';
        $froga4->erantzuna = '3H2O2 + 2KMnO4 = 2MnO2 + 2KOH + 3O2 + 2H2O';
        $froga4->medio = 'basico';
        $froga4->id_pista = '4';
        $froga4->save();
    }
}

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

        $froga1 = new Froga1();
        $froga1->bideak = 'McConkey';
        $froga1->ezaugarriak = 'Detección de Coliformes, los de fermentación lenta tardan en crecer. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'CCA';
        $froga1->ezaugarriak = 'Detección y recuento de E. coli y coliformes. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'KAA';
        $froga1->ezaugarriak = 'Para la confirmación de enterococos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'VRBG';
        $froga1->ezaugarriak = 'Detección y recuento de coliformes en agua, alimentos… ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Hektoen';
        $froga1->ezaugarriak = 'Se usa para el aislamiento y el cultivo de microorganismos Gram - entéricos, y especialmente para el aislamiento de especies de Shigella y Salmonella. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'KIA';
        $froga1->ezaugarriak = 'Diferenciación de enterobacterias en base a la fermentación de hidratos de carbono y a la producción de ácido sulfhídrico. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Citrato Simmons';
        $froga1->ezaugarriak = 'Diferenciación de enterobacterias en base a la capacidad de usar citrato como única fuente de carbono y energía. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Lauril sulfato con MUG';
        $froga1->ezaugarriak = 'Se utiliza para la detección de coliformes y la detección fluorogénica de Escherichia coli en un entorno de laboratorio. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Caldo de glucosa azida (ROTHE)';
        $froga1->ezaugarriak = 'Es ideal para la enumeración de enterococos mediante el método de dilución en serie (NMP). ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Agar SLANETZ y BARTLEY';
        $froga1->ezaugarriak = 'Aislamiento y recuento de enterococos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Agar Sangre';
        $froga1->ezaugarriak = 'Al ser con sangre permite crecimiento de organismos nutricionalmente exigentes y la clara visualización de la hemólisis. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'MCP';
        $froga1->ezaugarriak = 'Aislamiento y recuento selectivo de Clostridium perfringens y sus esporas. Colonias amarillo-verdosas. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'TSC';
        $froga1->ezaugarriak = 'Aislamiento  y recuento de Clostridium perfringens en agua, alimentos… ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Agua de peptona';
        $froga1->ezaugarriak = 'Diluyente y enriquecimiento bacteriano. Se usa en la prueba INDOL y ONPG. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Mueller-Hilton';
        $froga1->ezaugarriak = 'Para analizar la sensibilidad de cepas aisladas a partir de agentes antimicrobianos ANTIBIOGRAMAS. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'EMB';
        $froga1->ezaugarriak = 'Diferenciación de la fermentación de lactosa de tipo butanodiólica y ácido mixta (Diferenciar Serratia-E.coli).         ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Bacto 2R';
        $froga1->ezaugarriak = 'Se utiliza para el cultivo de microorganismos heterótrofos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Chapman TTC';
        $froga1->ezaugarriak = 'Medio selectivo y diferencial utilizado para el control presuntivo de E. coli y coliformes en aguas.         ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'TSB';
        $froga1->ezaugarriak = 'Es utilizado en el control de esterilidad de productos biológicos, farmacéuticos y cosméticos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'm-FC';
        $froga1->ezaugarriak = 'Medio selectivo y diferencial para enumeración de coliformes fecales por la técnica de Filtración de Membrana, en aguas. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Salmonella-Shigella';
        $froga1->ezaugarriak = 'Este medio se utiliza para el aislamiento primario de Salmonella a partir de muestras fecales humanas. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'ENDO';
        $froga1->ezaugarriak = 'La selectividad se debe al sulfito de sodio, supresión parcial de los microorganismos Gram +. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Estreptococos - KF';
        $froga1->ezaugarriak = 'Medio para la detección y recuento de enterococos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Sabouraud con cloranfenicol';
        $froga1->ezaugarriak = 'Se usa para el aislamiento de hongos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Luria';
        $froga1->ezaugarriak = 'Es un medio nutricionalmente rico que se utiliza principalmente para el cultivo de bacterias. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'TSX';
        $froga1->ezaugarriak = 'Recuento y detección de E. coli en alimentos. ';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'LIA';
        $froga1->ezaugarriak = 'Medio de cultivo utilizado para diferenciar microorganismos, especialmente Salmonella spp., basado en la descarboxilación y desaminación de la lisina y en la producción de ácido sulfhídrico.';
        $froga1->id_pista = '1';
        $froga1->save();

        $froga1 = new Froga1();
        $froga1->bideak = 'Clark y Lubs';
        $froga1->ezaugarriak = 'Medio para ensayos de Rojo de metilo y Voges-Proskauer (APHA) para la identificación acorde al IMVIC. ';
        $froga1->id_pista = '1';
        $froga1->save();
    }
}

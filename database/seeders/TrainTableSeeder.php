<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'azienda' => 'trenitalia',
                'stazione_partenza' => 'milano',
                'stazione_arrivo' => 'verona',
                'orario_partenza' => '09:20:00',
                'orario_arrivo' => '12:00:00',
                'codice_treno' => 'sam12',
                'numero_carrozze' => '10',
                'in_orario' => '1',
                'cancellato' => '0',
            ],
            [
                'azienda' => 'TFL',
                'stazione_partenza' => 'firenze',
                'stazione_arrivo' => 'genova',
                'orario_partenza' => '16:20:00',
                'orario_arrivo' => '18:00:00',
                'codice_treno' => 's212',
                'numero_carrozze' => '16',
                'in_orario' => '0',
                'cancellato' => '1',
            ],

        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}

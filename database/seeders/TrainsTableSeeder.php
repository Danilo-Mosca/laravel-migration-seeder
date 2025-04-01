<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo la Classe "Str" che mi permette di utilizzare Str::limit() per tagliare la stringa se supera un limite da me imposto:
use Illuminate\Support\Str;
// importo la classe Faker per i faker:
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // passo come argomento al metodo run() una istanza $faker della classe Faker importata:
    public function run(Faker $faker): void
    {
        /* --------------- Esempio aggiunta di valori con la classe Faker: --------------- */
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();    // creo un'istanza del Model Train che mi permetterà di assegnare riga per riga un treno in partenza

            // Nelle successive 3 istruzioni con il comando: Str::limit richiamo il metodo "limit" della classe "Str" (precedentemente importata) e gli dico di passarmi una compagnia (dove presente $faker->company) o una città (dove presente $faker->city) e gli dico rispettivamente di troncare la stringa restituita rispettivamente a 30 e 40 caratteri. il '' finale indica semplicemente di non aggiungere i puntini (...) finali:
            $newTrain->azienda = Str::limit($faker->company, 30, '');
            $newTrain->stazione_di_partenza = Str::limit($faker->city, 40, '');
            $newTrain->stazione_di_arrivo = Str::limit($faker->city, 40, '');
            $newTrain->orario_di_partenza = $faker->time('H:i:s');
            $newTrain->orario_di_arrivo = $faker->time('H:i:s');
            // Metodo successivo spiegato:
            // unique() assicura che il valore generato sia univoco.
            // regexify('TRN[A-Z0-9]{5}') genera una stringa che inizia con "TRN" ed è seguita da 5 caratteri {5} alfanumerici compresi tra A e Z e 0 e 9:
            $newTrain->codice_treno = $faker->unique()->regexify('TRN[A-Z0-9]{5}');
            $newTrain->totale_carrozze = $faker->numberBetween(0, 30);
            $newTrain->in_orario = $faker->boolean;
            $newTrain->cancellato = $faker->boolean;
            // Dico di restituirmi una data compresa tra il 1/03/2025 e 1 anno dalla data inserita, ovvero fino al 1/03/2026:
            $newTrain->data_partenza = $faker->dateTimeBetween('2025-03-01', '1 years')->format('Y-m-d');

            $newTrain->save();  //metodo che salva i dati nel database
        }
    }
}

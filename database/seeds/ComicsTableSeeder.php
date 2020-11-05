<?php

use Illuminate\Database\Seeder;
// Aggiungo il model che deve utilizzare il seeder
use App\Comic;
use App\Author;
// Aggiungo il Faker per popolare la tabella
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Inserisco il faker nel metodo run
    public function run(Faker $faker)
    {
        //Eseguo ciclo for per la creazione dei fumetti
        for ($i = 0; $i < 30; $i++) { 
            // Prendo un autore in modo casuale
            $RandomAuthors = Author::inRandomOrder()->first();

            // Instanzio un nuovo oggetto Comic dal model
            $newComic = new Comic;

            // Stabilisco le caratteristiche dei campi per i faker
            $newComic->title = $faker->sentence(6,true);
            if (rand(0,1) == 1){
                $newComic->original_title = $faker->text(100);
            }
            $newComic->author_id = $RandomAuthors->id;
            $newComic->editor = $faker->company;
            $newComic->release = $faker->year('now');
            $newComic->number = $faker->numberBetween(1, 1500);
            $newComic->collection = rand(0,1);
            $newComic->n_pages = $faker->numberBetween(30, 500);
            $newComic->reading = (rand(0,1) == 1) ? "ltr" : "rtl";
            $newComic->price = $faker->randomFloat(2, 1, 999);
            $newComic->color = rand(0,1);
            $newComic->cover = $faker->imageUrl(200, 300);
            

            // Salvo il nuovo oggetto
            $newComic->save();

        }
    }
}

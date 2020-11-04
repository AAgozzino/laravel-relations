<?php

use Illuminate\Database\Seeder;
use App\AuthorInfo;
use App\Author;
use Faker\Generator as Faker;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Prendo tutti gli autori dalla tabella Authors
        $authors = Author::all();

        // Per ogni autore genero delle nuove info autore
        foreach($authors as $author){
            
            $newAuthorInfo = new AuthorInfo;
            $newAuthorInfo->author_id = $author->id;
            $newAuthorInfo->nationality = $faker->country;
            $newAuthorInfo->bio = $faker->paragraph(5, true);
            if (rand(0,2) == 1){
                $newAuthorInfo->photo = $faker->imageUrl(200, 300);
            }

            $newAuthorInfo->save();
        }
    }
}

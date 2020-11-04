<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newAuthor = new Author;

        for ($i=0; $i <10 ; $i++) { 
            $newAuthor->name = $faker->firstName();
            $newAuthor->name = $faker->lastName();
            $newAuthor->date_of_birth = $faker->dateTimeBetween('-30 years', 'now');

            $newAuthor->save();
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('original_title', 100)->nullable();
            $table->string('author', 50);
            $table->string('editor', 50);
            $table->year('release');
            $table->smallInteger('number');
            $table->boolean('collection')->default(true);
            $table->smallInteger('n_pages');
            $table->string('reading', 3);
            $table->float('price', 5,2);
            $table->boolean('color')->default(true);
            $table->string('cover')->default('https://via.placeholder.com/200x300');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Campo 'title' tipo string
            $table->string('year', 8); // Campo 'year' tipo string de longitud 8
            $table->string('director', 64); // Campo 'director' tipo string de longitud 64
            $table->string('poster'); // Campo 'poster' tipo string
            $table->boolean('rented')->default(false); // Campo 'rented' tipo booleano con valor por defecto false
            $table->text('synopsis');
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
        Schema::dropIfExists('movies');
    }
};

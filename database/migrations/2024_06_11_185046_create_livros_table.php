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
        Schema::dropIfExists('table');
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('Autor');
            $table->string('Título');
            $table->string('Subtítulo');
            $table->integer('Edição');
            $table->string('Editora');
            $table->integer('Ano Da Publicação');
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
        Schema::dropIfExists('livros');
    }
};

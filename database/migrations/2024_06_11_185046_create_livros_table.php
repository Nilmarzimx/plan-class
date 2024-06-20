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
            $table->string('Titulo');
            $table->string('Subtítulo');
            $table->integer('Edicao');
            $table->string('Editora');
            $table->integer('Ano_Da_Publicação');
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

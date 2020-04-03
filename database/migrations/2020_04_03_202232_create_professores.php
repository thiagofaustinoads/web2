<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('matricula', 100);
            $table->string('cpf', 100);
            $table->string('telefone', 100);
            $table->string('email', 100);
            $table->string('cep', 100);
            $table->string('complemento', 100);
            $table->string('bairro', 100);
            $table->string('uf', 100);
            $table->string('municipio', 100);


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
        Schema::dropIfExists('professores');
    }
}

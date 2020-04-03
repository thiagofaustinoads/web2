<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('telefone', 15);
            $table->string('email', 15);
            $table->string('cep', 15);
            $table->string('logradouro', 15);
            $table->string('complemento', 15);
            $table->string('bairro', 15);
            $table->string('uf', 15);
            $table->string('municipio', 15);
            $table->string('data_nascimento', 15);

            
            //$table->integer('matricula');
            //$table->string('endereco', 50);
            //$table->unsignedBigInteger('curso_id');
            //$table->foreign('curso_id')->references('id')->on('cursos');
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
        Schema::dropIfExists('alunos');
    }
}

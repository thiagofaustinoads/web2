<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas_alunos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('turma_id');
            $table->foreign('turma_id')->references('id')->on('turma');
            
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('aluno');


            
            
            $table->string('semestre', 15);

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
        Schema::dropIfExists('turmas_alunos');
    }
}

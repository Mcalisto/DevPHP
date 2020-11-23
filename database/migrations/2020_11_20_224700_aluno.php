<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('aluno', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('matricula')->unique();
          $table->string('situacao');
          $table->string('cep');
          $table->string('cidade');
          $table->string('estado');
          $table->string('bairro');
          $table->string('numero');
          $table->string('complemento');
          $table->string('curso');
          $table->string('turma');
          $table->date('data_matricula');
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
        //
    }
}

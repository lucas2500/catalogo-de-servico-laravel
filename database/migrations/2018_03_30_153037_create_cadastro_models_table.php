<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeServico');
            $table->string('descricao');
            $table->enum('departamento', ['Administração', 'Financeiro', 'Linha de produção', 'Portaria', 'Recursos humanos']);
            $table->enum('prioridade', ['Alta', 'Média', 'Baixa']);
            $table->enum('canalSuporte', ['Email', 'Ramal']);
            $table->enum('canalSolicitacao', ['Email', 'Ramal']);
            $table->string('horarioFunc');
            $table->string('sla');
            $table->enum('status', ['Ativo', 'Inativo']);
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
        Schema::dropIfExists('cadastro_models');
    }
}

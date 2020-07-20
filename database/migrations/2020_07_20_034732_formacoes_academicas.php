<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormacoesAcademicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacoes_academicas', function (Blueprint $table) {
            $table->bigIncrements('form_acad_id');
            $table->bigInteger('usuario_id')->unsigned();
            $table->string('nome_instituicao');
            $table->bigInteger('pais_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->bigInteger('cidade_id')->unsigned();
            $table->bigInteger('nivel_est_id')->unsigned();
            $table->bigInteger('curso_acad_id')->unsigned();
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->string('situacao');
            //Informações Segurança
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->string('usuario_id_created')->nullable();
            $table->string('usuario_id_updated')->nullable();
            $table->string('usuario_id_deleted')->nullable();
            $table->string('ind_status');
            
            //Chaves Estrangeiras
            $table->foreign('usuario_id')->references('usuario_id')->on('users');
            $table->foreign('pais_id')->references('pais_id')->on('paises');
            $table->foreign('estado_id')->references('estado_id')->on('estados');
            $table->foreign('cidade_id')->references('cidade_id')->on('cidades');
            $table->foreign('nivel_est_id')->references('nivel_est_id')->on('niveis_estudo');
            $table->foreign('curso_acad_id')->references('curso_acad_id')->on('cursos_academicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formacoes_academicas');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacoesAcademicasUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('FORMACOES_ACADEMICAS_USUARIO', function (Blueprint $table) {
            $table->bigIncrements('idformacaoacad')->unsigned();
            $table->bigInteger('idusuario')->unsigned();
            $table->string('foanomeinstituicao', 100);
            $table->bigInteger('idpais')->unsigned();
            $table->bigInteger('idestado')->unsigned();
            $table->bigInteger('idcidade')->unsigned();
            $table->bigInteger('idnivelestudo')->unsigned();
            $table->bigInteger('idcursoacademico')->unsigned();
            $table->date('foadtinicio');
            $table->date('foadtfim');
            $table->string('foaindsituacao', 1);
            $table->char('foaindstatus', 1);
            //Informações Segurança
            $table->timestamp('dtcadastro')->nullable();
            $table->timestamp('dtedicao')->nullable();
            $table->timestamp('dtexclusao')->nullable();
            $table->bigInteger('usucriou')->nullable();
            $table->bigInteger('usueditou')->nullable();
            $table->bigInteger('usuexcluiu')->nullable();
            //Chaves Estrangeiras
            $table->foreign('idusuario')->references('idusuario')->on('USUARIOS');
            $table->foreign('idpais')->references('idpais')->on('PAISES');
            $table->foreign('idestado')->references('idestado')->on('ESTADOS');
            $table->foreign('idcidade')->references('idcidade')->on('CIDADES');
            $table->foreign('idnivelestudo')->references('idnivelestudo')->on('NIVEISESTUDO');
            $table->foreign('idcursoacademico')->references('idcursoacademico')->on('CURSOSACADEMICOS');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::dropIfExists('formacoes_academicas');*/
    }
}

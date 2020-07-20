<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TiposHabilitacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_habilitacao', function (Blueprint $table) {
            $table->bigIncrements('tipos_h_id');
            $table->string('nome');
            //Informações Segurança
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->string('usuario_id_created')->nullable();
            $table->string('usuario_id_updated')->nullable();
            $table->string('usuario_id_deleted')->nullable();
            $table->string('ind_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_habilitacao');
    }
}
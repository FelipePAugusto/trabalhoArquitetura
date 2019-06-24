<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acidentes', function (Blueprint $table) {
            $table->bigIncrements('acidente_id');
            $table->integer('id')->unsigned();
            $table->date('data_inversa');
            $table->string('dia_semana')->unique();
            $table->time('horario');
            $table->string('uf',2)->unique();
            $table->integer('br');
            $table->string('km');
            $table->string('municipio');
            $table->string('causa_acidente');
            $table->string('tipo_acidente');
            $table->string('classificacao_acidente');
            $table->string('fase_dia');
            $table->string('sentido_via');
            $table->string('condicao_metereologica');
            $table->string('tipo_pista');
            $table->string('tracado_via');
            $table->string('uso_solo');
            $table->integer('ano');
            $table->integer('pessoas');
            $table->integer('mortos');
            $table->integer('feridos_leves');
            $table->integer('feridos_graves');
            $table->integer('ilesos');
            $table->integer('ignorados');
            $table->integer('feridos');
            $table->integer('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acidentes');
    }
}

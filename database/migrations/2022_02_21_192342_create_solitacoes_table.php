<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solitacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_viaturas');
            $table->foreign('fk_viaturas')->references('id')->on('viaturas')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('anexo',255);
            $table->string('latitude',255);
            $table->string('longitude',255);
            $table->string('valorPagar',255);
            $table->string('status',255);
            $table->string('quantidadeCarga',255);
            $table->longText('informacaoCarga');
            $table->date('Entrega');
            $table->softDeletes();
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
        Schema::dropIfExists('solitacoes');
    }
}

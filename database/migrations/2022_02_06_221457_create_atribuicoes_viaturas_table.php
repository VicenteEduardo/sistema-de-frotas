<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtribuicoesViaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribuicoes_viaturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_viaturas');
            $table->foreign('fk_viaturas')->references('id')->on('viaturas')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->longText('detalhes')->nullable();
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
        Schema::dropIfExists('atribuicoes_viaturas');
    }
}

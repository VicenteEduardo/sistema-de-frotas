<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaturas', function (Blueprint $table) {
            $table->id();
$table->string('matricula',255);
$table->string('modelo',255);

$table->string('quantidade',255);
$table->string('descricao');
$table->string('imagem_viatura',255);
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
        Schema::dropIfExists('viaturas');
    }
}

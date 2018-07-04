<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herois', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome");
            $table->enum("sexo", ['M', 'F', 'O']);
            $table->enum("terraqueo", ['S', 'N'])->default('N');
            $table->string("planeta")->nullable();
            $table->string("pais")->nullable();
            $table->binary("foto")->nullable();
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
        Schema::dropIfExists('herois');
    }
}

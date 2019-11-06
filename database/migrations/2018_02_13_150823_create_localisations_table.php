<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_pays');
            $table->string('nom_ville');
            $table->double('logitude');
            $table->double('latitude');
            $table->integer('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
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
        Schema::dropIfExists('localisations');
    }
}

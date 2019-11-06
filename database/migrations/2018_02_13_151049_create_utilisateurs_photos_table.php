<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pdp_src')->nullable();
            $table->string('cover_src')->nullable();
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
        Schema::dropIfExists('utilisateurs_photos');
    }
}

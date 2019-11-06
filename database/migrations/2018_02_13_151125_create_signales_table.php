<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signales', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->integer('id_produit');
            $table->integer('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
            $table->foreign('id_produit')->references('id')->on('produits');
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
        Schema::dropIfExists('signales');
    }
}

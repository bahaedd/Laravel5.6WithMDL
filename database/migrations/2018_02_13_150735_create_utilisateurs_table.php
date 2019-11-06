<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->tinyInteger('confirmed')->default(0);
			$table->string('confirmation_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
			$table->string('telephone')->nullable();
            $table->text('adresse')->nullable();
            $table->text('bio')->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('carte_type')->nullable();
            $table->bigInteger('num_carte')->nullable();
            $table->string('date_exp')->nullable();
            $table->double('cvv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}

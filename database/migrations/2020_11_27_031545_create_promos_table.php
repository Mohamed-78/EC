<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('reduction');
            $table->integer('ancPrice');
            $table->integer('newPrice');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('categorie_id');
            $table->date('date_ajout');
            $table->string('photo');
            $table->string('photos')->nullable();
            $table->longText('description');
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
        Schema::dropIfExists('promos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('centres', function (Blueprint $table) {
            $table->id();
            $table->string('centre_name');
            $table->string('centre_image');
            $table->unsignedBigInteger('categorie_id');
            //$table->foreign('categorie_id')->references('id')->on('categoriecentres')->onDelete('cascade');
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
        Schema::dropIfExists('centres');
    }
}

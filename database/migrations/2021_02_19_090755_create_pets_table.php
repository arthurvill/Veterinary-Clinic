<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger("owner_id");
            $table->unsignedInteger("specie_id")->nullable();

            $table->string("name");
            $table->string("breed")->nullable();
            $table->unsignedInteger("age")->nullable();
            $table->float("weight")->nullable();
            $table->string("photo")->nullable();

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
        Schema::dropIfExists('pets');
    }
}
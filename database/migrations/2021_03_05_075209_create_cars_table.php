<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('color', 50)->nullable();
            $table->string('serialNumber', 50);
            $table->string('matricule')->nullable();
            $table->tinyInteger('numberDoors');
            $table->tinyInteger('numberChair');
            $table->integer('mileage');
            $table->tinyInteger('numberCylenders');
            $table->text('description');
            $table->string('comentary')->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('cars');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesories', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 45);
            $table->string('Model', 45);
            $table->text('Numserie');
            $table->text('Price');
            $table->string('State', 45);
            $table->text('Comentary');
            $table->tinyInteger('Available');
            $table->date('Date');
            $table->time('Time');
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
        Schema::dropIfExists('accesories');
    }
}

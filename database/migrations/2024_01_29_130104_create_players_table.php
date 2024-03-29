<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('high');
            $table->integer('play_number');
            $table->integer('born');
            $table->string('from');
            $table->string('first_club');
            $table->string('image');
            $table->unsignedBigInteger("sport_id")->nullable();
            $table->foreign("sport_id")->references("id")->on("sports")->onDelete("SET NULL");







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
        Schema::dropIfExists('players');
    }
};

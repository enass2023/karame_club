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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("player_id")->nullable();
            $table->foreign("player_id")->references("id")->on("players")->onDelete("SET NULL");
            $table->unsignedBigInteger("matche_id")->nullable();
            $table->foreign("matche_id")->references("id")->on("matches")->onDelete("SET NULL");
            $table->string('status');







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
        Schema::dropIfExists('plans');
    }
};

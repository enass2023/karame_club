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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->date("datetime");
            $table->string('status');
            $table->string('plan');
            $table->string('channel');
            $table->string('round');
            $table->string('play_ground');
            $table->unsignedBigInteger("session_id")->nullable();
            $table->foreign("session_id")->references("id")->on("sessions")->onDelete("SET NULL");
            $table->unsignedBigInteger("club1_id")->nullable();
            $table->foreign("club1_id")->references("id")->on("clubs")->onDelete("SET NULL");
            $table->unsignedBigInteger("club2_id")->nullable();
            $table->foreign("club2_id")->references("id")->on("clubs")->onDelete("SET NULL");












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
        Schema::dropIfExists('matches');
    }
};

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
        Schema::create('replacments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("inplayer_id")->nullable();
            $table->foreign("inplayer_id")->references("id")->on("players")->onDelete("SET NULL");
            $table->unsignedBigInteger("outplayer_id")->nullable();
            $table->foreign("outplayer_id")->references("id")->on("players")->onDelete("SET NULL");
            $table->unsignedBigInteger("matche_id")->nullable();
            $table->foreign("matche_id")->references("id")->on("matches")->onDelete("SET NULL");

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
        Schema::dropIfExists('replacments');
    }
};

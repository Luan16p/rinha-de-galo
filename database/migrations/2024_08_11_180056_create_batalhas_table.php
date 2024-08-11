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
        Schema::create('batalhas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ring');
            $table->unsignedBigInteger('id_rooster_player_1');
            $table->unsignedBigInteger('id_rooster_player_2');
            $table->timestamps();

            $table->foreign('id_rooster_player_1')->references('id')->on('rooster');
            $table->foreign('id_rooster_player_2')->references('id')->on('rooster');
            $table->foreign('id_ring')->references('id')->on('arenas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batalhas');
    }
};


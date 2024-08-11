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
        Schema::create('rooster', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('owner');
            $table->string('name');
            $table->integer('strength');
            $table->integer('defense');
            $table->integer('agility');
            $table->timestamps();

            $table->foreign('owner')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooster', function (Blueprint $table) {
            $table->dropForeign(['owner']);
        });

        Schema::dropIfExists('rooster');
    }
};

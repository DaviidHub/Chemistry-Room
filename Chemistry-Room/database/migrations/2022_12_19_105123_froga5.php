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
        //
        Schema::create('Froga5', function (Blueprint $table) {
            $table->id();
            $table->string('izena', 90)->nullable();
            $table->string('taldea', 90)->nullable();
            $table->unsignedBigInteger('id_pista')->nullable();
            $table->foreign('id_pista')->references('id')->on('Pistak');
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
        //
    }
};

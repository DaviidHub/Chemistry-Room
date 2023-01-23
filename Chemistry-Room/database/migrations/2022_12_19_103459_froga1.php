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
        Schema::create('Froga1', function (Blueprint $table) {
            $table->id();
            $table->string('bideak', 300)->nullable();
            $table->string('ezaugarriak', 300)->nullable();
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

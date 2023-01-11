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
        Schema::create('Erabiltzaileak', function (Blueprint $table) {
            $table->id();
            $table->string('izena', 75)->nullable();
            $table->string('abizenak', 75)->nullable();
            $table->string('mail', 35)->nullable();
            $table->string('pasahitza', 35)->nullable();
            $table->string('rol', 35)->nullable();
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

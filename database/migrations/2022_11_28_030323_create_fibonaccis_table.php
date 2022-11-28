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
        Schema::create('fibonaccis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order');
            $table->string('value')->nullable();
            $table->bigInteger('max_seconds');
            $table->timestamp('started')->nullable();
            $table->timestamp('finished')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fibonaccis');
    }
};

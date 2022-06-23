<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVikicarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vikicars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('available');
            $table->string('units');
            $table->string('from');
            $table->string('to');
            $table->string('image');
            $table->string('details');
            $table->string('category');
            $table->string('characteristics');
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
        Schema::dropIfExists('Vikicars');
    }
}

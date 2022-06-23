<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVikiFearPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viki_fear_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('viki_car_id');
            $table->float('daily_present_price');
            $table->integer('from');
            $table->integer('to');
            $table->float('daily_update_price');
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
        Schema::dropIfExists('viki_fear_prices');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date("p_date");
            $table->date("r_date");
            $table->string("p_location");
            $table->string("r_location");
            $table->time("p_time");
            $table->time("r_time");
            $table->integer("shab_car");
            $table->string("silver_cover")->nullable(true);
            $table->string("gold_cover")->nullable(true);
            $table->string("additional_driver")->nullable(true);
            $table->string("child_seat")->nullable(true);
            $table->string("boost_seat")->nullable(true);
            $table->string("payment_method");
            $table->string("total_amount");
            $table->string("comments")->nullable(true);;
            $table->string("agreement");
            $table->string("image");
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
        Schema::dropIfExists('reservations');
    }
}

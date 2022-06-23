<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtionalOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtional_options', function (Blueprint $table) {
            $table->id();
                $table->string('boost_seat')->nullable(true);
            $table->float('child_seat')->nullable(true);
            $table->float('gold_cover')->nullable(true);
            $table->float('basic_cover')->nullable(true);
            $table->float('silver_cover')->nullable(true);
            $table->float('driver_for')->nullable(true);
            $table->float('additional_driver')->nullable(true);
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
        Schema::dropIfExists('addtional_options');
    }
}

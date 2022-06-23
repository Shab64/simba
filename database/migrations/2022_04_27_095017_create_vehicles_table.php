<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('reg_number');
            $table->date('reg_date');
            $table->date('reg_end_date');
            $table->string('brand');
            $table->string('model');
            $table->string('type');
            $table->integer('year');
            $table->string('color');
            $table->string('win_no');
            $table->string('engine_no');
            $table->string('finance');
            $table->string('category');
            $table->date('purchase_date');
            $table->float('purchase_price');
            $table->float('monthly_repayment');
            $table->string('leader_finance');
            $table->string('transmission');
            $table->date('maintenance_date');
            $table->date('due_maintenance_date');
            $table->date('start_insurance_date');
            $table->date('end_insurance_date');
            $table->string('insurance_doc');
            $table->string('driver')->nullable(true);
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
        Schema::dropIfExists('vehicles');
    }
}

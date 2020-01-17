<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaybillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waybills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumInteger('number');
            $table->date('date');
            $table->mediumInteger('order_no');
            $table->date('order_date');
            $table->mediumInteger('deliveryorder_no');
            $table->date('deliveryorder_date');
            $table->mediumInteger('vehicle_no');
            $table->mediumInteger('permit_no');
            $table->date('permit_month');
            $table->string('customer_name');
            $table->text('address');
            $table->integer('customer_tel');
            $table->string('drivers_name');
            $table->string('transporter');
            $table->string('item');
            $table->Integer('lot_no');
            $table->Integer('no_of_bags');
            $table->Integer('quantity');
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
        Schema::dropIfExists('waybills');
    }
}

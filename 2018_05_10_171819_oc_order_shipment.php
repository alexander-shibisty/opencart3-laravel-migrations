<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocordershipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_shipment', function (Blueprint $table) {
                $table->addColumn('integer', 'order_shipment_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'order_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->dateTime('date_added');
                $table->string('shipping_courier_id', 255)->default('');
                $table->string('tracking_number', 255)->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_order_shipment');
    }
}

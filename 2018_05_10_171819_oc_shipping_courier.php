<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocshippingcourier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_shipping_courier', function (Blueprint $table) {
                $table->addColumn('integer', 'shipping_courier_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->primary();
                $table->string('shipping_courier_code', 255)->default('');
                $table->string('shipping_courier_name', 255)->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_shipping_courier');
    }
}

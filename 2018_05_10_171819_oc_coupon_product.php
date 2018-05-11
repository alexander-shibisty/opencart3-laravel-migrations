<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occouponproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_coupon_product', function (Blueprint $table) {
                $table->addColumn('integer', 'coupon_product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'coupon_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_coupon_product');
    }
}

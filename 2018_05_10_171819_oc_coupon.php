<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_coupon', function (Blueprint $table) {
                $table->addColumn('integer', 'coupon_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 128);
                $table->string('code', 20);
                $table->char('type', 1);
                $table->decimal('discount', 15, 4);
                $table->tinyInteger('logged');
                $table->tinyInteger('shipping');
                $table->decimal('total', 15, 4);
                $table->date('date_start')->default(NULL);
                $table->date('date_end')->default(NULL);
                $table->addColumn('integer', 'uses_total', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('uses_customer', 11);
                $table->tinyInteger('status');
                $table->dateTime('date_added');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_coupon');
    }
}

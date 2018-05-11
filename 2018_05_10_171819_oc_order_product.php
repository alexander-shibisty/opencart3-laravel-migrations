<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocorderproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_product', function (Blueprint $table) {
                $table->addColumn('integer', 'order_product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'order_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->index();
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('name', 255);
                $table->string('model', 64);
                $table->addColumn('integer', 'quantity', ['unsigned' => false, 'length' => 4, 'autoIncrement' => false]);
                $table->decimal('price', 15, 4)->default(0);
                $table->decimal('total', 15, 4)->default(0);
                $table->decimal('tax', 15, 4)->default(0);
                $table->addColumn('integer', 'reward', ['unsigned' => false, 'length' => 8, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_order_product');
    }
}

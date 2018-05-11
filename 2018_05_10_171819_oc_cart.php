<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_cart', function (Blueprint $table) {
                $table->addColumn('integer', 'cart_id', ['unsigned' => true, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'api_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->index();
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('session_id', 32);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'recurring_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->text('option');
                $table->addColumn('integer', 'quantity', ['unsigned' => false, 'length' => 5, 'autoIncrement' => false]);
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
        Schema::dropIfExists('oc_cart');
    }
}

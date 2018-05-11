<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocorderrecurring extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_recurring', function (Blueprint $table) {
                $table->addColumn('integer', 'order_recurring_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'order_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('reference', 255);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('product_name', 255);
                $table->addColumn('integer', 'product_quantity', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'recurring_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('recurring_name', 255);
                $table->string('recurring_description', 255);
                $table->string('recurring_frequency', 25);
                $table->smallInteger('recurring_cycle');
                $table->smallInteger('recurring_duration');
                $table->decimal('recurring_price', 10, 4);
                $table->tinyInteger('trial');
                $table->string('trial_frequency', 25);
                $table->smallInteger('trial_cycle');
                $table->smallInteger('trial_duration');
                $table->decimal('trial_price', 10, 4);
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
        Schema::dropIfExists('oc_order_recurring');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocorderrecurringtransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_recurring_transaction', function (Blueprint $table) {
                $table->addColumn('integer', 'order_recurring_transaction_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'order_recurring_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('reference', 255);
                $table->string('type', 255);
                $table->decimal('amount', 10, 4);
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
        Schema::dropIfExists('oc_order_recurring_transaction');
    }
}

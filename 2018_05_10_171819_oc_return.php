<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocreturn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_return', function (Blueprint $table) {
                $table->addColumn('integer', 'return_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'order_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('firstname', 32);
                $table->string('lastname', 32);
                $table->string('email', 96);
                $table->string('telephone', 32);
                $table->string('product', 255);
                $table->string('model', 64);
                $table->addColumn('integer', 'quantity', ['unsigned' => false, 'length' => 4, 'autoIncrement' => false]);
                $table->tinyInteger('opened');
                $table->addColumn('integer', 'return_reason_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'return_action_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'return_status_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->text('comment');
                $table->date('date_ordered')->default(NULL);
                $table->dateTime('date_added');
                $table->dateTime('date_modified');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_return');
    }
}

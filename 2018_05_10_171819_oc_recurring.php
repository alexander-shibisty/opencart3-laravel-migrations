<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocrecurring extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_recurring', function (Blueprint $table) {
                $table->addColumn('integer', 'recurring_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->decimal('price', 10, 4);
                $table->enum('frequency', ['day', 'week', 'semi_month', 'month', 'year']);
                $table->addColumn('integer', 'duration', ['unsigned' => true, 'length' => 10, 'autoIncrement' => false]);
                $table->addColumn('integer', 'cycle', ['unsigned' => true, 'length' => 10, 'autoIncrement' => false]);
                $table->tinyInteger('trial_status');
                $table->decimal('trial_price', 10, 4);
                $table->enum('trial_frequency', ['day', 'week', 'semi_month', 'month', 'year']);
                $table->addColumn('integer', 'trial_duration', ['unsigned' => true, 'length' => 10, 'autoIncrement' => false]);
                $table->addColumn('integer', 'trial_cycle', ['unsigned' => true, 'length' => 10, 'autoIncrement' => false]);
                $table->tinyInteger('status');
                $table->addColumn('integer', 'sort_order', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_recurring');
    }
}

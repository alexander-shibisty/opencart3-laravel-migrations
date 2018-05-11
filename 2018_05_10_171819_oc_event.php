<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_event', function (Blueprint $table) {
                $table->addColumn('integer', 'event_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('code', 64);
                $table->text('trigger');
                $table->text('action');
                $table->tinyInteger('status');
                $table->addColumn('integer', 'sort_order', ['unsigned' => false, 'length' => 3, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_event');
    }
}

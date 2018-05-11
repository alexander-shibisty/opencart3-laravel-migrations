<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class oclayoutroute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_layout_route', function (Blueprint $table) {
                $table->addColumn('integer', 'layout_route_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'layout_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'store_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('route', 64);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_layout_route');
    }
}

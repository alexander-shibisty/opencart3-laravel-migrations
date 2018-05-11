<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class oclayoutmodule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_layout_module', function (Blueprint $table) {
                $table->addColumn('integer', 'layout_module_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'layout_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('code', 64);
                $table->string('position', 14);
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
        Schema::dropIfExists('oc_layout_module');
    }
}

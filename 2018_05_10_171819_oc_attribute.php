<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocattribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_attribute', function (Blueprint $table) {
                $table->addColumn('integer', 'attribute_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'attribute_group_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
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
        Schema::dropIfExists('oc_attribute');
    }
}

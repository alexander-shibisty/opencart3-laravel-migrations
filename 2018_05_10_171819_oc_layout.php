<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class oclayout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_layout', function (Blueprint $table) {
                $table->addColumn('integer', 'layout_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 64);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_layout');
    }
}

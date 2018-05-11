<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocmodule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_module', function (Blueprint $table) {
                $table->addColumn('integer', 'module_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 64);
                $table->string('code', 32);
                $table->text('setting');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_module');
    }
}

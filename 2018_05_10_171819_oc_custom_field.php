<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occustomfield extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_custom_field', function (Blueprint $table) {
                $table->addColumn('integer', 'custom_field_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('type', 32);
                $table->text('value');
                $table->string('validation', 255);
                $table->string('location', 10);
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
        Schema::dropIfExists('oc_custom_field');
    }
}

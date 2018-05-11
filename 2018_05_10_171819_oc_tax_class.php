<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class octaxclass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_tax_class', function (Blueprint $table) {
                $table->addColumn('integer', 'tax_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('title', 32);
                $table->string('description', 255);
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
        Schema::dropIfExists('oc_tax_class');
    }
}

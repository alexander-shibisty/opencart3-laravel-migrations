<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocmanufacturer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_manufacturer', function (Blueprint $table) {
                $table->addColumn('integer', 'manufacturer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 64);
                $table->string('image', 255)->default(NULL);
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
        Schema::dropIfExists('oc_manufacturer');
    }
}

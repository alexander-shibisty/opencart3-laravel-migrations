<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocgeozone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_geo_zone', function (Blueprint $table) {
                $table->addColumn('integer', 'geo_zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 32);
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
        Schema::dropIfExists('oc_geo_zone');
    }
}

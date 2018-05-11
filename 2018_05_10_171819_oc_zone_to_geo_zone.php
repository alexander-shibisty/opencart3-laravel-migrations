<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class oczonetogeozone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_zone_to_geo_zone', function (Blueprint $table) {
                $table->addColumn('integer', 'zone_to_geo_zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'country_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'geo_zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
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
        Schema::dropIfExists('oc_zone_to_geo_zone');
    }
}

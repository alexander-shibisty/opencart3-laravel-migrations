<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_country', function (Blueprint $table) {
                $table->addColumn('integer', 'country_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 128);
                $table->string('iso_code_2', 2);
                $table->string('iso_code_3', 3);
                $table->text('address_format');
                $table->tinyInteger('postcode_required');
                $table->tinyInteger('status')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_country');
    }
}

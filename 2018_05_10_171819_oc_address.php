<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocaddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_address', function (Blueprint $table) {
                $table->addColumn('integer', 'address_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->index();
                $table->string('firstname', 32);
                $table->string('lastname', 32);
                $table->string('company', 40);
                $table->string('address_1', 128);
                $table->string('address_2', 128);
                $table->string('city', 128);
                $table->string('postcode', 10);
                $table->addColumn('integer', 'country_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->text('custom_field');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_address');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_customer', function (Blueprint $table) {
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'customer_group_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'store_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'language_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('firstname', 32);
                $table->string('lastname', 32);
                $table->string('email', 96);
                $table->string('telephone', 32);
                $table->string('fax', 32);
                $table->string('password', 40);
                $table->string('salt', 9);
                $table->text('cart');
                $table->text('wishlist');
                $table->tinyInteger('newsletter')->default(0);
                $table->addColumn('integer', 'address_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->text('custom_field');
                $table->string('ip', 40);
                $table->tinyInteger('status');
                $table->tinyInteger('safe');
                $table->text('token');
                $table->string('code', 40);
                $table->dateTime('date_added');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_customer');
    }
}

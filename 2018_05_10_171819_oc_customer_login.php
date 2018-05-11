<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occustomerlogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_customer_login', function (Blueprint $table) {
                $table->addColumn('integer', 'customer_login_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('email', 96)->index();
                $table->string('ip', 40)->index();
                $table->addColumn('integer', 'total', ['unsigned' => false, 'length' => 4, 'autoIncrement' => false]);
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
        Schema::dropIfExists('oc_customer_login');
    }
}

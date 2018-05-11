<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occurrency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_currency', function (Blueprint $table) {
                $table->addColumn('integer', 'currency_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('title', 32);
                $table->string('code', 3);
                $table->string('symbol_left', 12);
                $table->string('symbol_right', 12);
                $table->char('decimal_place', 1);
                $table->double('value', 15, 8);
                $table->tinyInteger('status');
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
        Schema::dropIfExists('oc_currency');
    }
}

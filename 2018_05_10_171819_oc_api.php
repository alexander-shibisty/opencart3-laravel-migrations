<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocapi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_api', function (Blueprint $table) {
                $table->addColumn('integer', 'api_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('username', 64);
                $table->text('key');
                $table->tinyInteger('status');
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
        Schema::dropIfExists('oc_api');
    }
}

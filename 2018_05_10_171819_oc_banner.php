<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocbanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_banner', function (Blueprint $table) {
                $table->addColumn('integer', 'banner_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 64);
                $table->tinyInteger('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_banner');
    }
}

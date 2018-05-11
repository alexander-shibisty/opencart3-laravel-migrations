<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocdownload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_download', function (Blueprint $table) {
                $table->addColumn('integer', 'download_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('filename', 160);
                $table->string('mask', 128);
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
        Schema::dropIfExists('oc_download');
    }
}

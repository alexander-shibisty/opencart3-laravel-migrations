<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocextensioninstall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_extension_install', function (Blueprint $table) {
                $table->addColumn('integer', 'extension_install_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'extension_download_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('filename', 255);
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
        Schema::dropIfExists('oc_extension_install');
    }
}

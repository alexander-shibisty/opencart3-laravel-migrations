<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocmodification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_modification', function (Blueprint $table) {
                $table->addColumn('integer', 'modification_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'extension_install_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('name', 64);
                $table->string('code', 64);
                $table->string('author', 64);
                $table->string('version', 32);
                $table->string('link', 255);
                $table->mediumText('xml');
                $table->tinyInteger('status');
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
        Schema::dropIfExists('oc_modification');
    }
}

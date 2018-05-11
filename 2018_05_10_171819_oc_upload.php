<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocupload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_upload', function (Blueprint $table) {
                $table->addColumn('integer', 'upload_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 255);
                $table->string('filename', 255);
                $table->string('code', 255);
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
        Schema::dropIfExists('oc_upload');
    }
}

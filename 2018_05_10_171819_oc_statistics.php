<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocstatistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_statistics', function (Blueprint $table) {
                $table->addColumn('integer', 'statistics_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('code', 64);
                $table->decimal('value', 15, 4);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_statistics');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocextension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_extension', function (Blueprint $table) {
                $table->addColumn('integer', 'extension_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('type', 32);
                $table->string('code', 32);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_extension');
    }
}

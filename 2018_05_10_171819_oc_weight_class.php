<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocweightclass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_weight_class', function (Blueprint $table) {
                $table->addColumn('integer', 'weight_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->decimal('value', 15, 8)->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_weight_class');
    }
}

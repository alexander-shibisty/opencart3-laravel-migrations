<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class oclengthclassdescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_length_class_description', function (Blueprint $table) {
                $table->addColumn('integer', 'length_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->primary();
                $table->addColumn('integer', 'language_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('title', 32);
                $table->string('unit', 4);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_length_class_description');
    }
}

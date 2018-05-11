<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class oclanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_language', function (Blueprint $table) {
                $table->addColumn('integer', 'language_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 32)->index();
                $table->string('code', 5);
                $table->string('locale', 255);
                $table->string('image', 64);
                $table->string('directory', 32);
                $table->addColumn('integer', 'sort_order', ['unsigned' => false, 'length' => 3, 'autoIncrement' => false])->default(0);
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
        Schema::dropIfExists('oc_language');
    }
}

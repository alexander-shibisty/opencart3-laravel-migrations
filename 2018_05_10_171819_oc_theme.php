<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class octheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_theme', function (Blueprint $table) {
                $table->addColumn('integer', 'theme_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'store_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('theme', 64);
                $table->string('route', 64);
                $table->mediumText('code');
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
        Schema::dropIfExists('oc_theme');
    }
}

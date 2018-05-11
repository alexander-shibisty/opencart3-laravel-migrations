<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occategoryfilter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_category_filter', function (Blueprint $table) {
                $table->addColumn('integer', 'category_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->primary();
                $table->addColumn('integer', 'filter_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_category_filter');
    }
}

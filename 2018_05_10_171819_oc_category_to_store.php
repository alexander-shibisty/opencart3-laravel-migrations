<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occategorytostore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_category_to_store', function (Blueprint $table) {
                $table->addColumn('integer', 'category_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->primary();
                $table->addColumn('integer', 'store_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_category_to_store');
    }
}

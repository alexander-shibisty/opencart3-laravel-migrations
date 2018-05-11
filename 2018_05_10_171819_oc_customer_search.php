<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occustomersearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_customer_search', function (Blueprint $table) {
                $table->addColumn('integer', 'customer_search_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'store_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'language_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('keyword', 255);
                $table->addColumn('integer', 'category_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->tinyInteger('sub_category');
                $table->tinyInteger('description');
                $table->addColumn('integer', 'products', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('ip', 40);
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
        Schema::dropIfExists('oc_customer_search');
    }
}

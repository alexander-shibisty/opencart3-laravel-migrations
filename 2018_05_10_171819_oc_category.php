<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class occategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_category', function (Blueprint $table) {
                $table->addColumn('integer', 'category_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('image', 255)->default(NULL);
                $table->addColumn('integer', 'parent_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0)->index();
                $table->tinyInteger('top');
                $table->addColumn('integer', 'column', ['unsigned' => false, 'length' => 3, 'autoIncrement' => false]);
                $table->addColumn('integer', 'sort_order', ['unsigned' => false, 'length' => 3, 'autoIncrement' => false])->default(0);
                $table->tinyInteger('status');
                $table->dateTime('date_added');
                $table->dateTime('date_modified');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_category');
    }
}

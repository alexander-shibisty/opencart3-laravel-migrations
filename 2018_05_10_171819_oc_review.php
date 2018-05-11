<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocreview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_review', function (Blueprint $table) {
                $table->addColumn('integer', 'review_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->index();
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('author', 64);
                $table->text('text');
                $table->addColumn('integer', 'rating', ['unsigned' => false, 'length' => 1, 'autoIncrement' => false]);
                $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('oc_review');
    }
}

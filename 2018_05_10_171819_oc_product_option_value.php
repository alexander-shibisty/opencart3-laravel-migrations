<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocproductoptionvalue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_product_option_value', function (Blueprint $table) {
                $table->addColumn('integer', 'product_option_value_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'product_option_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'option_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'option_value_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'quantity', ['unsigned' => false, 'length' => 3, 'autoIncrement' => false]);
                $table->tinyInteger('subtract');
                $table->decimal('price', 15, 4);
                $table->string('price_prefix', 1);
                $table->addColumn('integer', 'points', ['unsigned' => false, 'length' => 8, 'autoIncrement' => false]);
                $table->string('points_prefix', 1);
                $table->decimal('weight', 15, 8);
                $table->string('weight_prefix', 1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_product_option_value');
    }
}

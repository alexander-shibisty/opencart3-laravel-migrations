<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_product', function (Blueprint $table) {
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('model', 64);
                $table->string('sku', 64);
                $table->string('upc', 12);
                $table->string('ean', 14);
                $table->string('jan', 13);
                $table->string('isbn', 17);
                $table->string('mpn', 64);
                $table->string('location', 128);
                $table->addColumn('integer', 'quantity', ['unsigned' => false, 'length' => 4, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'stock_status_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('image', 255)->default(NULL);
                $table->addColumn('integer', 'manufacturer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->tinyInteger('shipping')->default(0);
                $table->decimal('price', 15, 4)->default(0);
                $table->addColumn('integer', 'points', ['unsigned' => false, 'length' => 8, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'tax_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->date('date_available')->default(NULL);
                $table->decimal('weight', 15, 8)->default(0);
                $table->addColumn('integer', 'weight_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->decimal('length', 15, 8)->default(0);
                $table->decimal('width', 15, 8)->default(0);
                $table->decimal('height', 15, 8)->default(0);
                $table->addColumn('integer', 'length_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->tinyInteger('subtract')->default(0);
                $table->addColumn('integer', 'minimum', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'sort_order', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->tinyInteger('status')->default(0);
                $table->addColumn('integer', 'viewed', ['unsigned' => false, 'length' => 5, 'autoIncrement' => false])->default(0);
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
        Schema::dropIfExists('oc_product');
    }
}

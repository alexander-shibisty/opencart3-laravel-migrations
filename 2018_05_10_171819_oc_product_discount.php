<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocproductdiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_product_discount', function (Blueprint $table) {
                $table->addColumn('integer', 'product_discount_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->index();
                $table->addColumn('integer', 'customer_group_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'quantity', ['unsigned' => false, 'length' => 4, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'priority', ['unsigned' => false, 'length' => 5, 'autoIncrement' => false])->default(0);
                $table->decimal('price', 15, 4)->default(0);
                $table->date('date_start')->default(NULL);
                $table->date('date_end')->default(NULL);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_product_discount');
    }
}

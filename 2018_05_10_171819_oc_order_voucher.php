<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocordervoucher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_voucher', function (Blueprint $table) {
                $table->addColumn('integer', 'order_voucher_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'order_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'voucher_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('description', 255);
                $table->string('code', 10);
                $table->string('from_name', 64);
                $table->string('from_email', 96);
                $table->string('to_name', 64);
                $table->string('to_email', 96);
                $table->addColumn('integer', 'voucher_theme_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->text('message');
                $table->decimal('amount', 15, 4);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_order_voucher');
    }
}

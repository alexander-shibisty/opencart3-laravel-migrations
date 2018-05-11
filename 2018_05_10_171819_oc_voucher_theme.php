<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocvouchertheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_voucher_theme', function (Blueprint $table) {
                $table->addColumn('integer', 'voucher_theme_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('image', 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_voucher_theme');
    }
}

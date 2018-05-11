<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocmarketing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_marketing', function (Blueprint $table) {
                $table->addColumn('integer', 'marketing_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 32);
                $table->text('description');
                $table->string('code', 64);
                $table->addColumn('integer', 'clicks', ['unsigned' => false, 'length' => 5, 'autoIncrement' => false])->default(0);
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
        Schema::dropIfExists('oc_marketing');
    }
}

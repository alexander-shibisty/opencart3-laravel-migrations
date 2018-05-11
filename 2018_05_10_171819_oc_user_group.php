<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocusergroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_user_group', function (Blueprint $table) {
                $table->addColumn('integer', 'user_group_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->string('name', 64);
                $table->text('permission');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_user_group');
    }
}

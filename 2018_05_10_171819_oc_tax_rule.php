<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class octaxrule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_tax_rule', function (Blueprint $table) {
                $table->addColumn('integer', 'tax_rule_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'tax_class_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'tax_rate_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('based', 10);
                $table->addColumn('integer', 'priority', ['unsigned' => false, 'length' => 5, 'autoIncrement' => false])->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_tax_rule');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order', function (Blueprint $table) {
                $table->addColumn('integer', 'order_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'invoice_no', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->string('invoice_prefix', 26);
                $table->addColumn('integer', 'store_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->string('store_name', 64);
                $table->string('store_url', 255);
                $table->addColumn('integer', 'customer_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'customer_group_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->string('firstname', 32);
                $table->string('lastname', 32);
                $table->string('email', 96);
                $table->string('telephone', 32);
                $table->string('fax', 32);
                $table->text('custom_field');
                $table->string('payment_firstname', 32);
                $table->string('payment_lastname', 32);
                $table->string('payment_company', 60);
                $table->string('payment_address_1', 128);
                $table->string('payment_address_2', 128);
                $table->string('payment_city', 128);
                $table->string('payment_postcode', 10);
                $table->string('payment_country', 128);
                $table->addColumn('integer', 'payment_country_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('payment_zone', 128);
                $table->addColumn('integer', 'payment_zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->text('payment_address_format');
                $table->text('payment_custom_field');
                $table->string('payment_method', 128);
                $table->string('payment_code', 128);
                $table->string('shipping_firstname', 32);
                $table->string('shipping_lastname', 32);
                $table->string('shipping_company', 40);
                $table->string('shipping_address_1', 128);
                $table->string('shipping_address_2', 128);
                $table->string('shipping_city', 128);
                $table->string('shipping_postcode', 10);
                $table->string('shipping_country', 128);
                $table->addColumn('integer', 'shipping_country_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('shipping_zone', 128);
                $table->addColumn('integer', 'shipping_zone_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->text('shipping_address_format');
                $table->text('shipping_custom_field');
                $table->string('shipping_method', 128);
                $table->string('shipping_code', 128);
                $table->text('comment');
                $table->decimal('total', 15, 4)->default(0);
                $table->addColumn('integer', 'order_status_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->addColumn('integer', 'affiliate_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->decimal('commission', 15, 4);
                $table->addColumn('integer', 'marketing_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('tracking', 64);
                $table->addColumn('integer', 'language_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->addColumn('integer', 'currency_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);
                $table->string('currency_code', 3);
                $table->decimal('currency_value', 15, 8)->default(0);
                $table->string('ip', 40);
                $table->string('forwarded_ip', 40);
                $table->string('user_agent', 255);
                $table->string('accept_language', 255);
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
        Schema::dropIfExists('oc_order');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientIdProcessingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processings', function($table) {
			$table->integer('customer_id')->after('customer_name');
			$table->string('payment_gateway')->after('currency');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('processings', function($table) {
			$table->dropColumn('customer_id');
			$table->dropColumn('payment_gateway');
		});
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaycheckHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paycheckheaders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chk_number');
            $table->timestamp('date-paid');
            $table->timestamp('startpay');
            $table->timestamp('endpay');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paycheckheaders');
    }
}

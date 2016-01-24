<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) 
        
        {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('emp_id')->unsigned();
            $table->string('fname');
            $table->string('mname');             
            $table->string('lname');
            $table->string('address');
            $table->string('phone');
            $table->string('email'); 
            //$table->timestamps(); 

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}

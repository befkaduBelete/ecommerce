<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customer_detail', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('secondary_email');
            $table->string('telephone');
            $table->string('fax');
            $table->string('phone');
            $table->timestamps();
            $table->softDeletes();

            /*
             * Add Foreign/Unique/Index

            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
<<<<<<< HEAD
             * */


=======
>>>>>>> 61cca9260d75f322faff49975dedaaa23a4b4fd6
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('customer_detail');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
			$table->integer('int_user');
			$table->string('str_cname');
			$table->string('str_fname');
			$table->string('str_lname');
			$table->string('str_addr1');
			$table->string('str_addr2');
			$table->string('str_city');
			$table->string('str_country');
			$table->string('str_pcode');
			$table->string('str_telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_details');
    }
};

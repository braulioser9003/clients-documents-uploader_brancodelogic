<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('plan');
            $table->string('sponsor_code')->nullable();
            $table->string('ssn');
            $table->string('ssn_partial');
            $table->boolean('accept_term')->default(1);
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('street')->nullable();
            $table->string('street2')->nullable();
            $table->string('zip')->nullable();
            $table->string('birthday')->nullable();
            $table->string('answer_string')->nullable();
            $table->string('number_form')->default('1');
            $table->string('tracking_token')->nullable();
            $table->string('customer_token')->nullable();
            $table->boolean('tour')->default(1);
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
        Schema::dropIfExists('customer');
    }
}

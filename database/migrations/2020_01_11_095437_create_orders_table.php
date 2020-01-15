<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('contact');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('size');
            $table->string('details');
            $table->string('name2');
            $table->string('lastname2');
            $table->string('address2');
            $table->string('contact2');
            $table->string('city2');
            $table->string('state2');
            $table->string('zip2');
            $table->string('status')->default('Zahtjev za dostavu');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

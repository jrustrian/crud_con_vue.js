<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{

    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('addres');
            $table->string('phone_number');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
}

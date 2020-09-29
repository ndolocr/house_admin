<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('id_scan');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('contract_scan');
            $table->string('email')->unique();
            $table->string('passport_picture');
            $table->integer('id_number')->unique();
            $table->integer('phone_number')->unique();
            $table->string('middle_name')->nullable()
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
        Schema::dropIfExists('tenants');
    }
}

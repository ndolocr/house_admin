<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositRentSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_rent_settings', function (Blueprint $table) {
            $table->id();
            $table->text('details');
            $table->unsignedInteger('room_id');
            $table->decimal('rent_amount', 10,2);
            $table->decimal('room_deposit', 10,2);
            $table->decimal('water_deposit', 10,2);
            $table->decimal('electricity_deposit', 10,2);
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposit_rent_settings');
    }
}

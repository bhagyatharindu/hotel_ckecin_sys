<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->integer('booking_id')->autoIncrement();
            $table->integer('booking_room_id');
            $table->foreign('booking_room_id')
                ->references('room_id')
                ->on('rooms');
            $table->integer('booking_guest_id');
            $table->foreign('booking_guest_id')
                ->references('guest_id')
                ->on('guests');
            $table->integer('booking_package_type');
            $table->foreign('booking_package_type')
                ->references('package_type')
                ->on('packages');
            $table->integer('number_of_nights');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

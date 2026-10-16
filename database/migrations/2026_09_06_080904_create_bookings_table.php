<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->foreignId('car_id')
                  ->constrained('cars')
                  ->onDelete('cascade');

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->date('pickup_date');
            $table->date('return_date');

            $table->string('pickup_location');
            $table->string('return_location');

            $table->text('message')->nullable();

            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
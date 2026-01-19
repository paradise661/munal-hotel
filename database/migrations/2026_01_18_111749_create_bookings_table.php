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
            $table->id();
            // basic booking info
            $table->integer('order')->nullable();
            $table->boolean('status')->default(0);

            // room info
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('room_type')->nullable();

            // descriptions
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            // dates
            $table->date('checkin_date')->nullable();
            $table->date('checkout_date')->nullable();

            // guests
            $table->unsignedInteger('adults')->default(1);
            $table->unsignedInteger('children')->default(0);

            // customer info
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // extra info
            $table->text('special_request')->nullable();

            // add-ons (checkbox values)
            $table->json('add_ons')->nullable();
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

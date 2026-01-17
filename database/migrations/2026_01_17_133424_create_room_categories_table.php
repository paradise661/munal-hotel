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
        Schema::create('room_categories', function (Blueprint $table) {
            $table->id();
            // Ordering & Status
            $table->integer('order')->default(0)->nullable();
            $table->boolean('status')->default(true);

            // Content
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('short_description', 255)->nullable();
            $table->text('description')->nullable();

            // Images
            $table->string('image')->nullable();

            // SEO
            $table->string('seo_title')->nullable();
            $table->longText('seo_schema')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_categories');
    }
};

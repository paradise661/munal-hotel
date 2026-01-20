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
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('view')->nullable();
            $table->text('facilities')->nullable();
            $table->string('smoking')->nullable();
            $table->text('bathroom')->nullable();
            $table->string('wifi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn(['view','facilities', 'smoking', 'bathroom','wifi']);
        });
    }
};

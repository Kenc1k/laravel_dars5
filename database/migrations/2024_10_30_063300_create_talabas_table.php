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
        Schema::create('talabas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('gurux_id')->constrained('guruxes')->onDelete('cascade');
            $table->string('phone');
            $table->foreignId('manzil_id')->constrained('manzils')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talabas');
    }
};

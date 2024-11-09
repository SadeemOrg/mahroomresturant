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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // JSON for multiple languages
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Foreign key
            $table->foreignId('size_id')->constrained('sizes')->onDelete('cascade'); // Foreign key
            $table->integer('quantity')->default(0); // Quantity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

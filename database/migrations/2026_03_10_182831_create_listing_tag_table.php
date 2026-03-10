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
        Schema::create('listing_tag', function (Blueprint $table) {
            $table->foreignId('listing_id')->constrained('listings')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('listing_tags')->cascadeOnDelete();
            $table->unique(['listing_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_tag');
    }
};

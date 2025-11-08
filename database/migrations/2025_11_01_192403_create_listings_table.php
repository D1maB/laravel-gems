<?php

use App\Enums\ListingStatus;
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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            /** Custom fields */
            $table->string('short_description');
            $table->longText('description');
            $table->string('preview_image')->nullable();
            $table->string('github_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('creator_twitter_url')->nullable();
            $table->string('status')->default(ListingStatus::default());
            /** --- */

            $table->unsignedBigInteger('views_count')->default(0);
            $table->unsignedBigInteger('website_redirects_count')->default(0);

            //$table->date('published_at')->nullable();

            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->foreignId('listing_category_id')->nullable()->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};

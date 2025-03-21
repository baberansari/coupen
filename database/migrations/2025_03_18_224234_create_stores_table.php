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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->integer('store_sort_number')->nullable();
            $table->string('store_logo')->nullable();
            $table->string('store_featured_img')->nullable();
            $table->string('store_logo_alt_attribute')->nullable();
            $table->string('store_name');
            $table->string('store_url')->nullable();
            $table->string('store_slug')->unique();
            $table->string('store_affiliate_url')->nullable();
            $table->text('store_description')->nullable();
            $table->decimal('store_rating', 3, 2)->nullable();
            $table->text('store_how_to_use')->nullable();
            $table->string('store_how_to_use_img')->nullable();
            $table->text('store_buyer_guide')->nullable();
            $table->string('store_buyers_guide_img')->nullable();
            $table->string('store_heading')->nullable();
            $table->string('store_sidebar_heading')->nullable();
            $table->text('store_sidebar_content')->nullable();
            $table->text('store_content')->nullable();
            $table->string('store_video_embedded_tittle')->nullable();
            $table->text('store_video_embedded_code')->nullable();
            $table->string('store_instagram_url')->nullable();
            $table->string('store_facebook_url')->nullable();
            $table->string('store_twitter_url')->nullable();
            $table->string('store_google_plus_url')->nullable();
            $table->string('store_youtube_url')->nullable();
            $table->string('store_pinterest_url')->nullable();
            $table->string('store_linkedin_url')->nullable();
            $table->string('seo_page_title')->nullable();
            $table->string('seo_meta_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->text('seo_meta_keyword')->nullable();
            $table->string('seo_meta_canonical')->nullable();
            $table->text('seo_meta_tags')->nullable();
            $table->boolean('seo_meta_index')->default(true);
            $table->text('seo_head_script')->nullable();
            $table->text('seo_footer_script')->nullable();
            $table->text('store_schema_code')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};

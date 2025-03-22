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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('page_link')->nullable();
            $table->string('page_name')->nullable();
            $table->string('seo_page_title')->nullable();
            $table->string('seo_meta_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->text('seo_meta_keyword')->nullable();
            $table->string('seo_meta_canonical')->nullable();
            $table->text('seo_meta_tags')->nullable();
            $table->string('seo_meta_index')->nullable();
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
        Schema::dropIfExists('seos');
    }
};

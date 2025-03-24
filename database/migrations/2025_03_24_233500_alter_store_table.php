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
        Schema::table('stores', function (Blueprint $table) {

            $table->integer('store_home_page_visibility')->nullable();
            $table->integer('store_home_page_sidebar_visibility')->nullable();
            $table->integer('store_home_page_top_store')->nullable();
            $table->integer('store_nav_bar_visibility')->nullable();
            $table->integer('store_month_visibility')->nullable();
            $table->integer('store_sitemap')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

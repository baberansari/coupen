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
        Schema::table('categories', function (Blueprint $table) {

            $table->integer('category_home_page_visibility')->nullable();
            $table->integer('category_home_page_sidebar_visibility')->nullable();
            $table->integer('category_homepage_1')->nullable();
            $table->integer('category_homepage_2')->nullable();

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

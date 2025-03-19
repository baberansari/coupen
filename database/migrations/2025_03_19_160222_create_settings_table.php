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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('settings_site_title')->nullable();
            $table->string('settings_top_bar')->nullable();
            $table->string('settings_top_bar_link')->nullable();
            $table->string('settings_logo')->nullable();
            $table->string('settings_footer_logo')->nullable();
            $table->string('settings_favicon')->nullable();
            $table->string('settings_email')->nullable();
            $table->string('settings_email_to')->nullable();
            $table->string('settings_email_from')->nullable();
            $table->string('settings_phone')->nullable();
            $table->string('settings_address')->nullable();
            $table->string('settings_head_script')->nullable();
            $table->string('settings_popup_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

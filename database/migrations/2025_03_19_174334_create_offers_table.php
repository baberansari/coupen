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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->enum('offer_type', ['deal', 'code']);
            $table->enum('offer_working', ['yes', 'no'])->nullable();
            $table->enum('offer_online', ['online', 'in-store']);
            $table->date('offer_expiry_date')->nullable();
            $table->string('offer_title');
            $table->text('offer_description');
            $table->text('offer_trem_condition');
            $table->string('offer_code')->nullable();
            $table->text('offer_affiliate_url')->nullable();
            $table->boolean('offer_free_shipping')->default(false);
            $table->boolean('offer_gift')->default(false);
            $table->string('offer_discount_tittle')->nullable();
            $table->string('offer_discount_number')->nullable();
            $table->boolean('offer_verified')->default(false);
            $table->boolean('offer_exclusive')->default(false);
            $table->boolean('offer_home_page_visibility')->default(false);
            $table->boolean('offer_home_page_category')->default(false);
            $table->boolean('offer_home_page_featured_offer')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};

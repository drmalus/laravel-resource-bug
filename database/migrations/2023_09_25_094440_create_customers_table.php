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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->index();
            $table->string('email')->unique()->index();
            $table->string('phone')->nullable()->index();
            $table->string('shipping_address')->nullable()->index();
            $table->string('billing_name')->nullable()->index();
            $table->string('billing_address')->nullable()->index();
            $table->string('billing_tax_number')->nullable();
            $table->boolean('consent_accepted')->default(0);
            $table->json('coupons')->nullable();
            $table->integer('current_coupon_points')->unsigned()->default(0);
            $table->boolean('is_member')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

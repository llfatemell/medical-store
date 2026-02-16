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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name'); // نام محصول

            $table->unsignedBigInteger('price_b2c')->nullable(); // قیمت مصرف‌کننده
            $table->unsignedBigInteger('price_b2b')->nullable(); // قیمت عمده

            $table->text('medical_usage'); // کاربرد پزشکی
            $table->text('description')->nullable(); // توضیحات محصول
            $table->text('warnings')->nullable(); // هشدارها

            $table->enum('order_type', [
                'single',        // فقط تکی
                'single_bulk',   // تکی و عمده
                'bulk'           // فقط عمده
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

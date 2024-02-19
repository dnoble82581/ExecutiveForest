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
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('long_description');
            $table->mediumText('short_description')->nullable();
            $table->mediumText('material_finish')->nullable();

            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('status')->default('0')->comment('0=available,1=unavailable');
            $table->string('on_sale')->default('0')->comment('0=false,1=true');

            $table->string('meta_title')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->mediumText('meta_description')->nullable();

            $table->string('sku')->nullable();
            $table->string('dimensions')->nullable();
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

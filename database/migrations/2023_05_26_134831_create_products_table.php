<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sku');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_url')->nullable();
            $table->unsignedBigInteger('category_id')->nullable(); // Change to nullable
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('sort_number');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
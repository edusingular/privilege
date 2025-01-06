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
        Schema::disableForeignKeyConstraints();

        Schema::create('media_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id'); // Corrigido para unsigned
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade'); // Use o nome correto
            $table->unsignedBigInteger('product_id'); // Corrigido para unsigned
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->text('photo_video');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_products');
    }
};

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

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id'); // Corrigido para unsigned
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade'); // Use o nome correto
            $table->unsignedBigInteger('category_id'); // Corrigido para unsigned
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->float('amount');
            $table->float('amount_promotion')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

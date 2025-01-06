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

        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id'); // Corrigido para unsigned
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
            $table->string('title');
            $table->text('description'); // Corrigido para text
            $table->float('amount', 8, 2); // Com precisão opcional
            $table->float('cashback', 8, 2); // Com precisão opcional
            $table->integer('points'); // Corrigido para integer
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
        Schema::dropIfExists('packages');
    }
};

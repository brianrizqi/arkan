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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // design, supply chain, business, technology
            $table->string('type')->default('Full-time');
            $table->string('level')->default('Mid-level');
            $table->string('location')->default('Riyadh, KSA');
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->text('requirements')->nullable();
            $table->text('benefits')->nullable();
            $table->date('closing_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};

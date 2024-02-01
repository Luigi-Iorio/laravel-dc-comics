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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60)->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('thumb', 400)->nullable(true);
            $table->decimal('price', 4, 2)->nullable(true);
            $table->string('series', 50)->nullable(true);
            $table->date('sale_date')->nullable(true);
            $table->string('type', 50)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};

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
        Schema::create('dramas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('original_title')->nullable();
            $table->year('release_year')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('poster_url')->nullable();
            $table->string('network')->nullable();
            $table->enum('status', ['ongoing', 'completed'])->default('completed');
            $table->foreignId('created_by')->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dramas');
    }
};

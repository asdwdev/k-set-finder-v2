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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('type', ['add_location', 'add_scene', 'edit', 'photo', 'review']);
            $table->string('target_table');
            $table->unsignedBigInteger('target_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('moderator_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};

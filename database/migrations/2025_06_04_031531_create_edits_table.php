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
        Schema::create('edits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('edited_by')->constrained('users')->cascadeOnDelete();
            $table->string('target_table');
            $table->unsignedBigInteger('target_id');
            $table->string('field_changed');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->timestamp('edited_at');
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edits');
    }
};

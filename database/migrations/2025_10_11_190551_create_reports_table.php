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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('mark_id')->constrained()->onDelete('cascade');
            $table->enum('issue_type', ['missing_mark', 'wrong_mark', 'calculation_error', 'other']);
            $table->text('description');
            $table->enum('status', ['pending', 'under_review', 'resolved', 'rejected'])->default('pending');
            $table->foreignId('admin_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->text('resolution_notes')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};

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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
            $table->decimal('ca_mark', 5, 2)->nullable(); // Continuous Assessment (0-30)
            $table->decimal('exam_mark', 5, 2)->nullable(); // Exam Marks (0-70)
            $table->decimal('total_mark', 5, 2)->nullable(); // Computed: ca_mark + exam_mark
            $table->string('grade', 2)->nullable(); // Computed: A, B, C, D, F
            $table->decimal('grade_points', 3, 2)->nullable(); // Computed: 4.0, 3.5, etc.
            $table->integer('credit_hours')->default(3);
            $table->decimal('credit_points', 5, 2)->nullable(); // Computed: grade_points * credit_hours
            $table->string('evaluation')->nullable(); // e.g., "DISTINCTION", "UPPER_CREDIT"
            $table->string('orientation')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->string('jury_decision')->nullable(); // e.g., "VALIDATED"
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->boolean('submitted_by_lecturer')->default(false);
            $table->boolean('submitted_by_admin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};

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
        Schema::create('exams', function (Blueprint $table) {
            $table->id(); // exam_id
            $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade');
            $table->string('exam_title', 255)->nullable();
            $table->string('subject', 100)->nullable();
            $table->string('grade_level', 50)->nullable();
            $table->date('exam_date')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->text('question_bank')->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};

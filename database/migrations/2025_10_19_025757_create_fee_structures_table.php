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
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id(); // fee_structure_id
            $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade');
            $table->string('fee_category', 100)->nullable();
            $table->string('class_grade', 50)->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee_structures');
    }
};

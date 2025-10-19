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
        Schema::create('fee_payments', function (Blueprint $table) {
            $table->id(); // payment_id
            $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('fee_category', 100)->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->date('payment_date')->nullable();
            $table->enum('payment_mode', ['online', 'cash', 'cheque', 'other'])->nullable();
            $table->string('receipt', 255)->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee_payments');
    }
};

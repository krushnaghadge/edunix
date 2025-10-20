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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');  
        $table->string('email')->nullable()->unique();
        $table->string('phone', 20)->nullable();
        $table->string('course', 100)->nullable();

        $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade');
        $table->string('admission_number', 50)->unique()->nullable();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('class_grade', 50)->nullable();
        $table->foreignId('parent_id')->nullable()->constrained('users')->onDelete('set null');
        $table->date('date_of_birth')->nullable();
        $table->text('address')->nullable();
        $table->enum('status', ['active', 'inactive'])->default('active');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

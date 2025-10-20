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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institution_id');
            $table->string('student_name')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('contact_number', 20)->nullable();
            $table->string('email')->nullable();
            $table->enum('source', ['website', 'phone', 'walk-in', 'campaign', 'other'])->default('other');
            $table->unsignedBigInteger('assigned_to')->nullable(); // staff_id / user_id
            $table->enum('status', ['new','contacted','in_progress','closed'])->default('new');
            $table->text('remarks')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};

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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->foreignId('course_id');
            $table->string('title')->unique();
            $table->string('description');
            $table->timestamp('due_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('assignments_submissions', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->foreignId('assignment_id');
            $table->foreignId('user_id');
            $table->string('submission_text')->unique();
            $table->string('submission_file')->nullable();
            $table->string('description');
            $table->timestamp('submitted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
        Schema::dropIfExists('assignments_submissions');
    }
};

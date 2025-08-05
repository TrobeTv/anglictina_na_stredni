<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->constrained('topics')->onDelete('cascade');
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->enum('type', ['true_false', 'multiple_choice', 'single_choice', 'gap_fill_text', 'gap_fill_select', 'association']);
            $table->json('data')->comment('Contains questions, options, correct answers');
            $table->enum('status', ['draft', 'pending_review', 'published', 'rejected'])->default('draft');
            $table->enum('visibility', ['public', 'registered_only', 'class_private'])->default('registered_only');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop default 'name' and add specific name columns after 'id'
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }
            // --- FIX: Made these columns nullable to support SQLite ---
            $table->string('first_name')->nullable()->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('username')->unique()->nullable()->after('last_name');

            // Add role and link to the schools table
            $table->enum('role', ['student', 'teacher', 'admin', 'super_admin'])->default('student')->after('password');
            $table->foreignId('school_id')->nullable()->constrained('schools')->onDelete('set null')->after('role');

            // Add profile and feature-specific columns
            $table->string('avatar_url')->nullable()->after('school_id');
            $table->boolean('onboarding_completed')->default(false)->after('avatar_url');

            // Add columns for OAuth social logins
            $table->string('google_id')->nullable()->unique()->after('onboarding_completed');
            $table->string('apple_id')->nullable()->unique()->after('google_id');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->after('id')->nullable();
            $table->dropForeign(['school_id']);
            $table->dropColumn([
                'first_name',
                'last_name',
                'username',
                'role',
                'school_id',
                'avatar_url',
                'onboarding_completed',
                'google_id',
                'apple_id',
            ]);
        });
    }
};

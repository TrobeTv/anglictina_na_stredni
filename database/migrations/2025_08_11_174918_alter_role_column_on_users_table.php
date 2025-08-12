<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRoleColumnOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Update the role column to include 'user' in the enum values
            $table->enum('role', ['super_admin', 'admin', 'teacher', 'user'])->default('user')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert the role column to its original state
            $table->enum('role', ['super_admin', 'admin', 'teacher'])->default('user')->change();
        });
    }
}

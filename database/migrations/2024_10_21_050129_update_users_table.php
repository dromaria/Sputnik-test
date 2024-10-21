<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('email_verified_at');
            $table->dropRememberToken();
            $table->renameColumn('name', 'login');
            $table->unique('login', 'users_login_unique');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->unique()->nullable()->after('login');
            $table->timestamp('email_verified_at')->nullable()->after('email_verified_at');
            $table->rememberToken()->after('password');
            $table->dropUnique('users_login_unique');
            $table->renameColumn('login', 'name');
        });
    }
};

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('login')->nullable(false);
            $table->string('check_word');
            $table->boolean('active')->nullable(false)->default(true);
            $table->string('last_name');
            $table->string('second_name');
            $table->boolean('blocked')->nullable(false)->default(false);
            $table->boolean('email_correct')->nullable(false)->default(false);
            $table->boolean('password_expired')->nullable(false)->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('login');
            $table->dropColumn('check_word');
            $table->dropColumn('active');
            $table->dropColumn('last_name');
            $table->dropColumn('second_name');
            $table->dropColumn('blocked');
            $table->dropColumn('email_correct');
            $table->dropColumn('password_expired');
        });
    }
};

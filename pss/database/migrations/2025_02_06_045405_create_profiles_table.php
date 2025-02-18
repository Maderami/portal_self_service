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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('about_me');
            $table->date('birth_day');
            $table->string('gender')->nullable(false)->default('');
            $table->string('city');
            $table->string('country');
            $table->string('around');
            $table->string('work_area');
            $table->string('time_zone');
            $table->boolean('auto_time_zone')->default(false);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('language_id')->references('lid')->on('languages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

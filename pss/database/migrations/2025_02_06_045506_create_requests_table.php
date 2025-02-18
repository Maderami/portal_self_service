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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('request_name');
            $table->string('request_description');
            $table->string('status');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->time('time_exec');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('type_id')->references('id')->on('request_types');
            $table->foreignId('category_id')->references('id')->on('request_categories');
            $table->foreignId('attendance_id')->references('id')->on('attendences');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};

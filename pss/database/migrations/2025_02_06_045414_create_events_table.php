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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('message_id');
            $table->string('c_fields');
            $table->dateTime('date_insert');
            $table->dateTime('date_exec');
            $table->boolean('success_exec');
            $table->boolean('duplicate');
            $table->foreignId('language_id')->references('lid')->on('languages');
            $table->timecstamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

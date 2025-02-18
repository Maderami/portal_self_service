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
        Schema::table('attendences', function (Blueprint $table) {
            $table->string('name');
            $table->string('description');
            $table->string('attendance_code');
            $table->string('attendance_customer');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_conclusion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attendences', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('attendance_code');
            $table->dropColumn('attendance_customer');
            $table->dropColumn('date_start');
            $table->dropColumn('date_end');
            $table->dropColumn('date_conclusion');
        });
    }
};

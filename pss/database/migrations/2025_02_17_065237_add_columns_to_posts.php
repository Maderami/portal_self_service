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
        Schema::table('posts', function (Blueprint $table) {
            $table->text('preview');
            $table->string('preview_picture');
            $table->text('detail_information');
            $table->string('detail_picture');
            $table->string('symbol_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('preview');
            $table->dropColumn('preview_picture');
            $table->dropColumn('detail_information');
            $table->dropColumn('detail_picture');
            $table->dropColumn('symbol_code');
        });
    }
};

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
        Schema::table('poojas', function (Blueprint $table) {
            $table->text('brief_description')->nullable()->after('description');
            $table->string('hero_banner_path')->nullable()->after('image_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('poojas', function (Blueprint $table) {
            $table->dropColumn(['brief_description', 'hero_banner_path']);
        });
    }
};

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
            $table->string('title_hi')->nullable()->after('title');
            $table->text('description_hi')->nullable()->after('description');
            $table->text('brief_description_hi')->nullable()->after('brief_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('poojas', function (Blueprint $table) {
            $table->dropColumn(['title_hi', 'description_hi', 'brief_description_hi']);
        });
    }
};

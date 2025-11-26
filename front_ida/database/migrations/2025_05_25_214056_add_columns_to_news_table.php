<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('author')->nullable()->after('content'); // Ajoute la colonne author
            $table->string('image')->nullable()->after('published_at'); // Ajoute la colonne image
            $table->string('category')->nullable()->after('image'); // Ajoute la colonne category
        });
    }

    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['author', 'image', 'category']);
        });
    }
};
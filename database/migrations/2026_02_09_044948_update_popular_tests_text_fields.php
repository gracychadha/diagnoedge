<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('popular_tests', function (Blueprint $table) {
            $table->longText('description')->change();
            $table->longText('overview')->change();
        });
    }

    public function down(): void
    {
        Schema::table('popular_tests', function (Blueprint $table) {
            $table->string('description')->change();
            $table->string('overview')->change();
        });
    }
};

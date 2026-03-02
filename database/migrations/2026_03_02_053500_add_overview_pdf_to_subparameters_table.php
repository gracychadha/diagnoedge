<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('subparameters', function (Blueprint $table) {

            // ✅ PDF column (nullable)
            $table->string('overview_pdf')
                  ->nullable()
                  ->after('description');

        });
    }

    public function down(): void
    {
        Schema::table('subparameters', function (Blueprint $table) {
            $table->dropColumn('overview_pdf');
        });
    }
};
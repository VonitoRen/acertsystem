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
        Schema::table('appearance_certifications', function (Blueprint $table) {
            $table->date('dateOfAppearance_two')->nullable();
            $table->date('dateOfAppearance_three')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appearance_certifications', function (Blueprint $table) {
            $table->dropColumn('dateOfAppearance_two');
            $table->dropColumn('dateOfAppearance_three');        
        });
    }
};

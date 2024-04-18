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
        Schema::create('finality_certifications', function (Blueprint $table) {
            $table->id();
            $table->string('board');
            $table->string('complainants');
            $table->string('respondents');
            $table->string('caseNo');
            $table->string('for_');
            $table->date('caseDate');
            $table->text('description');
            $table->date('finalAndExecutoryDate');
            $table->date('dateDate');
            $table->foreignId('signatoriesid')->constrained('signatories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

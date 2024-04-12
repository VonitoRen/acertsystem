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
        Schema::create('accreditation_certifications', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('sex');
            $table->foreignId('professionID')->constrained('professions'); 
            $table->date('validityDate');
            $table->string('broker_name');
            $table->string('broker_reg_no');
            $table->date('date_issues')->default(now());
            $table->string('placeOfIssue')->default("Baguio City, Benguet, Philippines");
            $table->foreignId('signatoriesid')->constrained('signatories');
            $table->timestamps();
            $table->string('accreditation_no')->nullable();
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

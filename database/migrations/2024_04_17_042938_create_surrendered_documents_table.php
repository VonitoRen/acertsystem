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
        Schema::create('surrendered_documents', function (Blueprint $table) {
            $table->id();
            $table->string('doc_surrendered');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('sex');
            $table->foreignId('professionID')->constrained('professions'); 
            $table->date('returnedDate');
            $table->string('penalty');
            $table->string('case_title');
            $table->string('case_no');
            $table->string('placeOfIssue')->default("Baguio City, Benguet, Philippines");
            $table->date('date_issues')->default(now());
            $table->string('hearing_officer');
            $table->foreignId('person_role_id')->constrained('person_roles');
            $table->string('complainant_lname');
            $table->string('complainant_fname');
            $table->string('complainant_mname')->nullable();
            $table->string('complainant_suffix')->nullable();
            $table->string('complainant_sex');
            $table->string('chief');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surrendered_documents');
    }
};

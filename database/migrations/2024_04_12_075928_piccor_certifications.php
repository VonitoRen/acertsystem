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
        Schema::create('piccor_certifications', function (Blueprint $table) {
            $table->id();
            $table->string('board');
            $table->date('regDate');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('sex');
            $table->foreignId('professionID')->constrained('professions'); // Link to 'professions' table
            $table->string('regNo');
            $table->date('returnedDate');
            $table->string('penalty');
            $table->string('caseTitle');
            $table->string('administrativeCaseNo');
            $table->date('dateofIssuance');
            $table->string('hearingOfficer');
            $table->foreignId('person_role_id')->constrained('person_roles');
            $table->string('complainantlname');
            $table->string('complainantfname');
            $table->string('complainantmname')->nullable();
            $table->string('complainantsuffix')->nullable();
            $table->string('complainantsex');
            $table->string('legalDivisionChief');            
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

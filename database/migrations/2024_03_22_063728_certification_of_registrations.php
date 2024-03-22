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
        Schema::create('certification_of_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('sex');
            $table->foreignId('professionID')->constrained('professions'); // Link to 'professions' table
            $table->string('regnum');
            $table->date('registeredDate');
            $table->date('date_issues')->default(now());
            $table->string('placeOfIssue')->default("Baguio City, Philippines");
            $table->foreignId('signatoriesid')->constrained('signatories'); // Link to 'signatories' table
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

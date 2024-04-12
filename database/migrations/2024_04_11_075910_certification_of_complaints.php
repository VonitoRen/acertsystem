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
        Schema::create('certification_of_complaints', function (Blueprint $table) {
        $table->id();
        $table->string('lname');
        $table->string('fname');
        $table->string('mname')->nullable();
        $table->string('suffix')->nullable();
        $table->string('sex');
        $table->foreignId('professionID')->constrained('professions');
        $table->string('regnum');
        $table->date('registeredDate');
        $table->string('OR_No');
        $table->string('initials');
        $table->string('amount');
        $table->date('date_issues')->default(now());
        $table->foreignId('signatoriesAtty')->constrained('signatories');
        $table->foreignId('signatoriesid')->constrained('signatories');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certification_of_complaints');
    }
};

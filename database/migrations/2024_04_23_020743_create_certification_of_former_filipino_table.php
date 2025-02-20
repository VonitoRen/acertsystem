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
        Schema::create('certification_of_former_filipino', function (Blueprint $table) {
        $table->id(); 
        $table->string('lname');
        $table->string('fname');
        $table->string('mname')->nullable();
        $table->string('suffix')->nullable();
        $table->string('sex');
        $table->foreignId('professionID')->constrained('professions');
        $table->string('licenseNo');
        $table->date('dateIssued');
        $table->string('purpose');
        $table->date('dateOfIssuance')->default(now());
        $table->foreignId('person_role_id')->constrained('person_roles');
        $table->string('orNo');
        $table->string('orDate');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certification_of_former_filipino');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Student_ID')->nullable();
            $table->string('Khmer_Name')->nullable();
            $table->string('English_Name')->nullable();
            $table->string('Gender')->nullable();
            $table->string('College')->nullable();
            $table->string('Department')->nullable();
            $table->string('Short_Course')->nullable();
            $table->string('English_level')->nullable();
            $table->string('IT_level')->nullable();
            $table->string('Behavior')->nullable();
            $table->string('Working_team')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
}

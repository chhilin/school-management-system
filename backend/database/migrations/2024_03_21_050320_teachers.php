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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id');
            $table->unsignedBigInteger('image_id')->nullable();
            $table->string('khmer_name');
            $table->string('english_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('major');
            $table->string('employment_status');
            $table->string('hire_date')->nullable();

             $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};

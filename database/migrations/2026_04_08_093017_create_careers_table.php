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
       Schema::create('careers', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('location')->nullable();
    $table->text('description');
    $table->string('employment_type')->nullable();
    $table->string('experience_level')->nullable();
    $table->string('salary_range')->nullable();
    $table->enum('status',['Active','Closed'])->default('Active');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};

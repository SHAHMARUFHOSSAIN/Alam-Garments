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
    Schema::create('showrooms', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('title')->nullable();
        $table->text('description')->nullable();
        $table->string('location')->nullable();
        $table->string('contact')->nullable();
        $table->string('video_url')->nullable();
        $table->json('images')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showrooms');
    }
};

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
        Schema::create('user_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('university_name');
            $table->string('NIM')->unique();
            $table->string('university_card');
            $table->string('CPEmail')->nullable();
            $table->string('CPPassword')->nullable();
            $table->enum('VerifyAccount', ['verified', 'unverified','Problem'])->default('unverified');
            $table->string('Problem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mahasiswas');
    }
};

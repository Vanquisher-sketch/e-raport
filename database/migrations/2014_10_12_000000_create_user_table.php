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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['1', '2', '3']);
            $table->timestamps();
        });
        // Role
        // 1 = admin
        // 2 = guru
        // 3 = wali siswa
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};

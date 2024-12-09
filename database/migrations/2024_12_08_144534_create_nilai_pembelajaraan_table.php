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
        Schema::create('nilai_pembelajaraan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembelajaran_id')->constrained('pembelajaran')->cascadeOnDelete();
            $table->foreignId('anggota_kelas_id')->constrained('anggota_kelas')->cascadeOnDelete();
            $table->string('nilai_pengetahuan');
            $table->string('nilai_keterampilan');
            $table->string('nilai_pts');
            $table->string('nilai_pas');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_pembelajaraan');
    }
};

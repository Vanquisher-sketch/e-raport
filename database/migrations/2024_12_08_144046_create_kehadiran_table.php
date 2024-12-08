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
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->foreignId('anggota_kelas_id')->constrained('anggota_kelas')->cascadeOnDelete();
            $table->string('sakit');
            $table->string('izin');
            $table->string('tanpa_keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};

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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnDelete();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['Laki_laki', 'Perempuan']);
            $table->enum('jenis_pendaftaran', ['1', '2']);
            $table->date('tanggal_diterima');
            $table->string('nis');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('agama', ['1', '2', '3', '4', '5', '6']);
            $table->enum('status_dalam_keluarga', ['1', '2', '3']);
            $table->string('anak_ke');
            $table->text('alamat');
            $table->string('telepon');

            $table->string('nama_ayah');
            $table->string('Pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali');
            $table->string('pekerjaan_wali');
            $table->enum('status', ['1', '2']);
            $table->timestamps();
        });
         // Jenis Pendaftaran 
        // 1 = Siswa Baru
        // 2 = Pindahan

        // Agama
        // 1 = Islam 
        // 2 = Protestan
        // 3 = Katolik
        // 4 = Hindu
        // 5 = Budha
        // 6 = Khonghucu 

        // Status Dalam Keluarga 
        // 1 = Anak Kandung 
        // 2 = Anak Angkat 
        // 3 = Anak Tiri

        // Status
        // 1 = Aktif
        // 2 = keluar
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};

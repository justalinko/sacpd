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
        Schema::create('calons', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('jabatan');
            $table->string('nik');
            $table->string('dokumen_ktp')->nullable();
            $table->string('dokumen_kk')->nullable();
            $table->string('dokumen_ijazah_awal')->nullable();
            $table->string('dokumen_ijazah_akhir')->nullable();
            $table->string('dokumen_surat_lamaran')->nullable();
            $table->string('dokumen_surat_kesehatan')->nullable();
            $table->string('dokumen_skck')->nullable();
            $table->string('dokumen_surat_pengadilan')->nullable();

            $table->enum('status', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->enum('keterangan' , ['test psikologi' , 'test wawancara' , 'test pengetahuan' , 'test administrasi' , 'gagal','lolos'])->default('test administrasi');
            $table->text('catatan')->nullable();
            $table->string('hasil_test')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calons');
    }
};

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
        Schema::create('hasiltests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('calon_id');
            $table->string('hasil_psikologi')->default(0);
            $table->string('hasil_wawancara')->default(0);
            $table->string('hasil_pengetahuan')->default(0);
            $table->string('hasil_administrasi')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasiltests');
    }
};

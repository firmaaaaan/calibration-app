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
        Schema::create('kalibrasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('instansi');
            $table->string('email');
            $table->string('telepon');
            $table->string('nama_alat');
            $table->string('merk');
            $table->string('serial_number');
            $table->text('keterangan')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalibrasis');
    }
};

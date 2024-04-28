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
            $table->string('Nama', 50);
            $table->dateTime('Tanggal');
            $table->string('OpsiKehadiran');
            $table->string('Notelp');
            $table->string('Komentar')->nullable();
            $table->timestamps();
        });

        Schema::create('akun', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('Nama', 50);
            $table->string('Password');
            $table->string('Role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('akun');
    }
};

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
        //
        Schema::create('lowongan', function (Blueprint $table) {
            $table->uuid('id_lowongan')->primary();
            $table->timestamp('tanggal_dibuka')->default(now());
            $table->timestamp('tanggal_ditutup')->default(now());
            $table->string('foto')->nullable();
            $table->string('deskripsi');
            $table->string('judul');
            $table->integer('kuota');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('lowongan');
    }
};

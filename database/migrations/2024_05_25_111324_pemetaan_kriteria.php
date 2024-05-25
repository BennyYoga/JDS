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
        Schema::create('pemetaan_kriteria', function (Blueprint $table) {
            $table->uuid('pemetaan_kriteria')->primary();
            $table->uuid('id_lowongan')->references('id_lowongan')->on('lowongan');
            $table->uuid('id_kriteria')->references('id_kriteria')->on('kriteria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pemetaan_kriteria');
    }
};

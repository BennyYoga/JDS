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
        Schema::create('kriteria', function (Blueprint $table) {
            $table->uuid('id_kriteria')->primary();
            $table->string('nama_kriteria');
            $table->text('deskripsi');
            $table->smallInteger('bobot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('kriteria');
    }
};

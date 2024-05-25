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
        Schema::create('pelamar', function (Blueprint $table) {
            $table->uuid('id_pelamar')->primary();
            $table->timestamp('tanggal_melamar');
            $table->tinyInteger('status');
            $table->integer('hasil');

            $table->string('id_user')->references('id')->on('users');
            $table->string('id_lowongan')->references('id_lowongan')->on('lowongan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pelamar');
    }
};

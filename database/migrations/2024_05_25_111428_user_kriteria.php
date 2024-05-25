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
        Schema::create('user_kriteria', function (Blueprint $table) {
            $table->uuid('user_kriteria')->primary();
            $table->uuid('id_user')->references('id')->on('users');
            $table->uuid('id_kriteria')->references('id_kriteria')->on('kriteria');
            $table->integer('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('user_kriteria');
    }
};

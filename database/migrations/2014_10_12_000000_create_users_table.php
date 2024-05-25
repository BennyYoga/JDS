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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('username')->unique();
            $table->string('nama');
            $table->string('password');
            $table->tinyInteger('role');

            $table->string('alamat')->nullable();
            $table->timestamp('tanggal_lahir')->nullable();
            $table->string('picture')->nullable();
            $table->integer('telepon')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('keahlian')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

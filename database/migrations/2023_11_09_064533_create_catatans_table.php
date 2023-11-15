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
        Schema::create('catatans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('waktu', 20);
            $table->string('lokasi', 100);
            $table->string('suhu', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatans');
    }
};

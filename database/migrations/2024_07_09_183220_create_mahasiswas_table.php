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
        Schema::create('mahasiswas', function (Blueprint $table) {
            // $table->id();
            $table->string('nim', 15)->primary();
            $table->string('nama', 45);
            $table->string('tmp_lahir', 30);
            $table->date('tgl_lahir');
            $table->double('ipk');
            $table->foreignId('prodi_id')->constrained('prodis')->cascadeOnDelete();
            $table->foreignId('rombel_id')->constrained('rombongan_belajars')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};

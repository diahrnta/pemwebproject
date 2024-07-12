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
        Schema::create('dosens', function (Blueprint $table) {
            // $table->id();
            $table->engine = 'InnoDB';
            $table->string('nidn', 10)->primary();
            $table->string('nama', 45);
            $table->string('tmp_lahir', 45);
            $table->date('tgl_lahir');
            $table->string('jk', 1);
            $table->foreignId('prodi_id')->constrained('prodis')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};

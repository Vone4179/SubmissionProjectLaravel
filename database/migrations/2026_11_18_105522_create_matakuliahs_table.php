<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id(); // BIGINT, Primary Key, Auto Increment
            $table->string('kode_matakuliah', 20)->unique(); // VARCHAR(20)
            $table->string('nama_matakuliah', 100); // VARCHAR(100)
            $table->integer('sks'); // INTEGER
            $table->timestamps(); // created_at & updated_at (TIMESTAMP)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};
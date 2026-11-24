<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id(); // bigint (primary key) otomatis oleh Laravel
            $table->string('kode_buku')->unique(); // string (unik)
            $table->string('judul_buku'); // string
            $table->string('kategori'); // string (dipilih melalui dropdown)
            $table->timestamps(); // created_at dan updated_at (timestamp)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};

//soal 1b
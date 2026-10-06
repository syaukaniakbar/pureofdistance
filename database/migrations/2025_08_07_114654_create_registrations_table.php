<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->foreignId('province_id')->constrained('indonesia_provinces');
            $table->foreignId('city_id')->constrained('indonesia_cities');
            $table->foreignId('district_id')->constrained('indonesia_districts');
            $table->foreignId('village_id')->constrained('indonesia_villages');
            $table->string('handphone', 16);
            $table->enum('jenisKelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('golDarah', ['A', 'B', 'AB', 'O']);
            $table->enum('kategori', ['5K', '10K', '21K']);
            $table->string('ukuranJersey', 5);
            $table->string('namaBib', 12);
            $table->string('kontakDaruratNama');
            $table->string('kontakDaruratHp', 16);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
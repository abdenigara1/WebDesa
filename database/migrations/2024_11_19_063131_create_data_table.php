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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('judulBerita');
            $table->string('imgBeritaA');
            $table->string('imgBeritaB');
            $table->string('imgBeritaC');
            $table->string('imgBeritaD');
            $table->string('imgBeritaE');
            $table->string('berita');
            $table->string('imgPromote');
            $table->string('is_active');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};

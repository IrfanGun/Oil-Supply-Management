<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_penarikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->unsignedBigInteger('nominal_transaksi');
            $table->unsignedBigInteger('no_rekening');
            $table->boolean('berhasil');
            $table->boolean('menunggu');
            $table->boolean('gagal');
            $table->text('transfer_bank');
            $table->string('bukti_transfer');
            $table->softDeletes('deleted_at');
       

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_penarikans');
    }
};

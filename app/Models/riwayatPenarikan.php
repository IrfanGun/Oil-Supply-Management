<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\Livewire;

class riwayatPenarikan extends Model
{
    use HasFactory, SoftDeletes;

    public function riwayatPenarikan() {
        return $this->belongsTo(User::class,'user_id');
    }

    protected $fillable = [
       'user_id',
       'berhasil',
       'gagal',
       'menunggu',
       'nominal_transaksi',
       'transfer_bank',
       'no_rekening',
       'bukti_transfer'
       
    ];

    
}

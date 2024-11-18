<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengiriman extends Model
{
    use HasFactory, SoftDeletes;

    public function pengiriman() {
        return $this->belongsTo(User::class,'user_id');
    }
    
    protected $fillable = [
        'suplai_id',
        'user_id',
        'diterima',
        'menunggu',
        'ditolak',
        'diselesaikan',
        'kota',
        'deleted_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class suplai extends Model
{
    use HasFactory;
    public function suplai() {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'id',
        'suplai',
        'user_id' ,
        'menunggu' ,
        'diterima' ,
        'ditolak',
        'diselesaikan',
        'pendapatan' ,
        'pasokan'
       
        
    ];
}

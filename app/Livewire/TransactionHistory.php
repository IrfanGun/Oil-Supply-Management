<?php

namespace App\Livewire;

use App\Models\riwayatPenarikan;
use Livewire\Component;

class TransactionHistory extends Component
{
    public function render()
    {
        $transactionHistory = riwayatPenarikan::with('riwayatPenarikan')->where('berhasil', 1)->orWhere('gagal',1)->get();
        return view('livewire.transaction-history', compact('transactionHistory'));
    }
}

<?php

namespace App\Livewire;

use App\Models\riwayatPenarikan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserTransactHistory extends Component
{
    public function render()
    {

        $user = Auth::user();
        

        $transactions = riwayatPenarikan::where('user_id', $user->id)->where(function ($query) {
            $query->where('berhasil', 1)
            ->orWhere('gagal', 1);
        })
        ->orderByDesc('id')                                                                           
        ->get();
        return view('livewire.user-transact-history', compact('transactions'));
    }
}

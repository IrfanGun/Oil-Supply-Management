<?php

namespace App\Livewire;

use App\Models\riwayatPenarikan;
use App\Models\saldo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class WalletHeader extends ModalComponent
{
   

    // public function mount( $transactions ) 
    // {
    //     $this->tansactions = $transactions;
    // }

    public function render()
    {
        $user = Auth::user();
        $transactions = riwayatPenarikan::where('user_id', auth()->user()->id)->count() ?? 0;    
  
        $saldo = saldo::where('user_id',auth()->user()->id)->first();                                                                       

        return view('livewire.wallet-header', compact('saldo','transactions'));
    }
}

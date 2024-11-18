<?php

namespace App\Livewire;

use App\Http\Requests\StoreUserWithdrawRequest;
use App\Models\riwayatPenarikan;
use Livewire\Component;

class TransactionList extends Component
{   
    public riwayatPenarikan $riwayatPenarikan;

    public function mount(riwayatPenarikan $riwayatPenarikan)
    {
        $this->riwayatPenarikan = $riwayatPenarikan;
        $this->authorize('update', $this->riwayatPenarikan);
    }

    public function granted() 
    {
       $this->riwayatPenarikan->menunggu = 1;
       $this->riwayatPenarikan->gagal = 0;
       $this->riwayatPenarikan->diterima = 0;
       $this->riwayatPenarikan->diselesaikan = 0;
    }

    public function render()
    {
        $transactionList = riwayatPenarikan::with('riwayatPenarikan')->where('menunggu', 1)->orderByDesc('created_at')->paginate(10);

        return view('livewire.transaction-list', compact('transactionList'));
    }

    
}

<?php

namespace App\Livewire;

use App\Models\suplai;
use Livewire\Component;

class SupplyRequestHistory extends Component
{
    public function render()
    {   
        $supplyHistory = suplai::with('suplai')->where('ditolak', 1 )->orWhere('diselesaikan', 1)->get();
        return view('livewire.supply-request-history', compact('supplyHistory'));


    }
}

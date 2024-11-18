<?php

namespace App\Livewire;

use App\Models\suplai;
use Livewire\Component;

class SupplyRequestList extends Component
{
    public function render()
    {
        $supplyList = suplai::with('suplai')->where('menunggu',1)->get();
        return view('livewire.supply-request-list', compact('supplyList'));
    }
}

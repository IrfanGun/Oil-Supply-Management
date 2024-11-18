<?php

namespace App\Livewire;

use App\Models\suplai;
use Livewire\Component;

class SupplyProcess extends Component
{
    public function render()
    {   
        
        $supplyProcess = suplai::with('suplai')->where('diterima',1)->get();
        
        return view('livewire.supply-process', compact('supplyProcess'));
    }
}

<?php

namespace App\Livewire;

use App\Models\ringkasan;
use App\Models\suplai;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\saldo;
use Illuminate\Support\Facades\DB;

class SupplyConfirmation extends ModalComponent
{
    public suplai $suplai;  
    
    public function mount(suplai $suplai)
    {
        $this->suplai = $suplai;
        $this->authorize('update', $suplai);
    }

    public function accept()
    {
        
        $this->updateStatus(1,0);
    }

    public function decline()
    {
        
        $this->updateStatus(0,1);
    }

    private function updateStatus($accept,$decline)
    {
        $this->suplai->update([
            'menunggu' => 0,
            'diterima' => $accept,
            'ditolak' => $decline,
            'diselesaikan' => 0,
        ]);

        $this->redirect('/admin/suplai');
    }

    public function render() 
    {
        $userHistory = suplai::with('suplai')->find($this->suplai->id);
        return view('livewire.supply-confirmation', compact('userHistory'));
    }
}

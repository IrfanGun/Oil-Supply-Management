<?php

namespace App\Livewire;

use App\Models\saldo;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;
use App\Models\suplai;
use Livewire\Component;

class SupplyProcessModal extends ModalComponent
{
    public suplai $suplai;  
    
    public function mount(suplai $suplai)
    {
        $this->suplai = $suplai;
        $this->authorize('update', $suplai);
    }

    public function accept()
    {

        //  Add balance and history of transaction
        DB::transaction(function () {
            
            $addBalance = saldo::find($this->suplai->user_id);
            $addBalance->saldo += $this->suplai->pasokan * 1000;
            $addBalance->save();

        });

        $this->updateStatus(0,0,1);
        
       
    }

    public function decline()
    {
        $this->updateStatus(0,1,0);
    }

    private function updateStatus($accept,$decline,$finished)
    {
        $this->suplai->update([
            'menunggu' => 0,
            'diterima' => $accept,
            'ditolak' => $decline,
            'diselesaikan' => $finished,
        ]);

        $this->redirect('/admin/suplai');
    }

    public function render()
    {
        return view('livewire.supply-process-modal');
    }
}

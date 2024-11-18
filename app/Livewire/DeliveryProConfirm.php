<?php

namespace App\Livewire;

use App\Models\pengiriman;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeliveryProConfirm extends ModalComponent
{
    public pengiriman $pengiriman;

    public function mount(pengiriman $pengiriman)
    {
        $this->pengiriman = $pengiriman;
        $this->authorize('update', $this->pengiriman);
        
    }

    public function accept() 
    {
        $this->updateProcess(1,0);
    }

    public function decline() 
    {
        $this->updateProcess(0,1);
    }

    
    private function updateProcess($finished, $decline) {
        $this->pengiriman->update([
            'diterima' => 0,
            'diselesaikan' =>$finished,
            'ditolak' => $decline,
          
        ]);

        $this->redirect('/admin/penjemputan');
    }

    public function render()
    {
        return view('livewire.delivery-pro-confirm');
    }
}

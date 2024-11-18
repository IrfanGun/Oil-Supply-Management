<?php

namespace App\Livewire;

use App\Models\pengiriman;
use LivewireUI\Modal\ModalComponent;

class DeliveryConfirmation extends ModalComponent
{
    public $pengiriman;

    public function mount(pengiriman $pengiriman)
    {
        $this->pengiriman = $pengiriman;
        $this->authorize('update', $this->pengiriman);
    }

    public function accept() 
    {
        $this->updatedStatus(1,0);
    }

    public function decline() 
    {
        $this->updatedStatus(0,1);
    }

    private function updatedStatus($accept, $decline)
    {
        $this->pengiriman->update([
            'menunggu' => 0,
            'diterima' => $accept,
            'ditolak' => $decline
        ]);

        return redirect('/admin/penjemputan');
    }

    public function render()
    {

        
        return view('livewire.delivery-confirmation');
    }
}

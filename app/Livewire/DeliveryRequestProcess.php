<?php

namespace App\Livewire;

use App\Models\pengiriman;
use Livewire\Component;

class DeliveryRequestProcess extends Component
{
    public function render()
    {
        $deliveryProcess = pengiriman::where('diterima', 1)->get();
        return view('livewire.delivery-request-process', compact('deliveryProcess'));
    }
}

<?php

namespace App\Livewire;

use App\Models\pengiriman;
use Livewire\Component;

class DeliveryRequestHistory extends Component
{
    public function render()
    {
        $deliveryList = pengiriman::where('diselesaikan', 1)->orWhere('ditolak', 1)->orderByDesc('created_at')->paginate(10);
        return view('livewire.delivery-request-history', compact('deliveryList'));
    }
}

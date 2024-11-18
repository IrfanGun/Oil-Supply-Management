<?php

namespace App\Livewire;

use App\Models\pengiriman;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserRequestDelivery extends Component
{

    public function render()
    {
        $userReDeliver = pengiriman::where('user_id', Auth::user()->id)->where(function($query)
        {
            $query->where('menunggu',1)->orWhere('diterima',1);
        })->get();
        return view('livewire.user-request-delivery', compact('userReDeliver'));
    }
}

<?php

namespace App\Livewire;
use App\Models\pengiriman;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserRequestDelHistory extends Component
{
    public function render()
    {
        $userReDelivery = pengiriman::where('user_id', Auth::user()->id)->where( function( $query )
            {
                $query->where('diselesaikan', 1)
                    ->orWhere('ditolak', 1);
            }
        )->get();
        return view('livewire.user-request-del-history', compact('userReDelivery'));
    }
}

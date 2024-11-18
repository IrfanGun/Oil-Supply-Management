<?php

namespace App\Livewire;

use App\Models\suplai;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserRequestHistory extends Component
{

    public function render()
    {
        $requestHistory = suplai::where('user_id',auth()->user()->id)->where(function ($query) {
            $query->where('diselesaikan', 1)
                  ->orWhere('ditolak', 1);
        })
        ->get();
        return view('livewire.user-request-history', compact('requestHistory'));
    }
}

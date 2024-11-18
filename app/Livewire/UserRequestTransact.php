<?php

namespace App\Livewire;

use App\Models\riwayatPenarikan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserRequestTransact extends Component
{

    public function render()
    {
        $userRequestTrans = riwayatPenarikan::where('user_id', Auth()->user()->id)->where('menunggu',1)->get();
        return view('livewire.user-request-transact', compact('userRequestTrans'));
    }
}

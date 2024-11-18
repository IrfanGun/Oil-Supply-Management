<?php

namespace App\Livewire;

use App\Models\saldo;
use App\Models\suplai;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SuplaiBox extends Component
{
    public function render()
    {
        $saldoTotal = saldo::where('user_id', Auth::user()->id)->first();
        $suplayToday = suplai::where('user_id',Auth::user()->id);
        $recentSupply = $suplayToday->orderBy('pasokan','desc')->first();
        $totalSupply = $suplayToday->sum('pasokan');
        return view('livewire.suplai-box', compact('saldoTotal', 'recentSupply','totalSupply'));
    }
}

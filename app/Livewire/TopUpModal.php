<?php

namespace App\Livewire;

use App\Models\saldo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class TopUpModal extends ModalComponent
{
    public $amount;
    public $balance;
    public $validData = false;
    public function mount() 
    {
        $getId = saldo::find( Auth::user()->id);
        $this->balance = $getId ;      

    }

    private function validation()
    {
        $this->validate([
            'amount' => 'required|numeric|max:' . $this->balance->saldo,
        ], [
            'amount.max' => 'Jumlah yang Anda masukkan melebihi saldo.',
            'amount.required' => 'Mohon masukkan nominal yang ingin Anda transfer.',
            'amount.min' => 'Jumlah saldo Anda kurang.',
        ]);
        $this->validData = true;
    }

   

    public function updatedAmount() 
    {
       $this->validation();
       
    }

    public function render() : View
    {   
        return view('livewire.top-up-modal');
    }

}

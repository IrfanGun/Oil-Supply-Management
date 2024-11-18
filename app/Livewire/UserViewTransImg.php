<?php

namespace App\Livewire;

use App\Models\riwayatPenarikan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class UserViewTransImg extends ModalComponent
{
    public $imagePath;
    public riwayatPenarikan $transId;

    public function mount( riwayatPenarikan $transId )
    {
        $this->transId = $transId;
        $this->imagePath = riwayatPenarikan::where('id',$transId)->get();
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/public/' . $this->imagePath->bukti_transfer );
    }

    public function render()
    {
        $imageRender = riwayatPenarikan::where('id', 7)->first();

        return view('livewire.user-view-trans-img',compact('imageRender'));
    }
}

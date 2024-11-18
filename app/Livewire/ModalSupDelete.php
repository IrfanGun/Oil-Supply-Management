<?php

namespace App\Livewire;

use App\Models\suplai;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalSupDelete extends ModalComponent
{

    public suplai $userSupply;

    public function mount(suplai $userSupply)
    {
        $this->userSupply = $userSupply;
    }

    public function delete()
    {
        $this->userSupply->delete();
        $this->redirect('/beranda/index');
    }

    public function render()
    {
        return view('livewire.modal-sup-delete');
    }
}

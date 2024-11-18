<?php

namespace App\Livewire;

use App\Models\riwayatPenarikan;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalUserDelTrans extends ModalComponent
{
    public riwayatPenarikan $transactDel;

    public function mount(riwayatPenarikan $transactDel)
    {
        $this->transactDel = $transactDel;
    }

    public function delete()
    {
       
        $this->transactDel->delete();
        $this->redirect('/transaksi/dompet');
    }

    public function render()
    {
        return view('livewire.modal-user-del-trans');
    }
}

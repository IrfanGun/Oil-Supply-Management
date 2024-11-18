<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DetailModal extends ModalComponent
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->authorize('update', $this->user);
    }

    public function delete()
    {
        User::destroy($this->user->id);
        $this->redirect('/admin/beranda');
    }


    public function render()
    {
        $user = User::with('saldo')->first(); 
        return view('livewire.detail-modal', compact('user'));
    }
}

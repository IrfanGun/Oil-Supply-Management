<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\riwayatPenarikan;
use App\Models\saldo;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class TransactionConfirm extends ModalComponent
{
    use WithFileUploads;
    public riwayatPenarikan $transaction;

    #[Validate('required', message: 'Please provide a post title')]
    public $provenBank;
    public $checkFile;
    

    

    public function accept()
    {
      $this->validate();
      $userId = $this->transaction->user_id;
      $directory = 'transferProve/' . $userId;
      
      $filename = time() . '_' . $this->provenBank->getClientOriginalName();

      $imagePath = Storage::disk('public')->putFileAs($directory, $this->provenBank, $filename);
    
      $getAccount = $this->transaction;
      $getAccount->bukti_transfer = $imagePath;
      $getAccount->save();
      $getSaldo = saldo::where('id', $userId)->first();
      $getSaldo['saldo'] -= $this->transaction->nominal_transaksi;
      $getSaldo->save();
      
    
      $this->updateStatus(1,0);

    }

    public function decline()
    {
        $this->updateStatus(0,1);
    }
    
    private function updateStatus($accept, $decline)
    {
        $this->transaction->update([
            'menunggu' => 0,
            'berhasil' => $accept,
            'gagal' => $decline
        ]);

        $this->dispatch('provenBank');
        $this->redirect('/admin/transaksi');
    }

    public function mount(riwayatPenarikan $transaction)
    {
        
        $this->transaction = $transaction;
        $this->authorize('update', $this->transaction);

    }

    public function render()
    {
        return view('livewire.transaction-confirm');
    }
}

<?php

namespace App\Livewire;

use App\Models\suplai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserRequestSupply extends Component
{
    use WithPagination;


    public function delete($id)
    {
        $post = suplai::findOrFail($id);
        $post->delete();
    }

    public function render()
    {
        $userRequest = suplai::where('user_id',Auth::user()->id)->where(function ($query) {
            $query->where('menunggu',1)->orWhere('diterima',1);

        } )->get();
        return view('livewire.user-request-supply', compact('userRequest'));
    }
}

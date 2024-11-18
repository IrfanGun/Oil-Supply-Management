<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\User;
use Intervention\Image\ImageManager;





class PhotoProfile extends Component
{

    use WithFileUploads;
    #[Validate('image', message: 'File harus gambar')]
    #[Validate('max:1024', message: 'Ukuran file maksimum 1 MB')]
    public $photo;
    
    public $user;

    public function mount(User $user) 
    {
        $this->user = $user;
    }

    public function updatedPhoto() 
    {
        $this->validate();
        
        $userId = auth()->user()->id;
        $directory = 'profile/' . $userId;
      
        $filename = time() . '_' . $this->photo->getClientOriginalName();

        $imagePath = Storage::disk('public')->putFileAs($directory, $this->photo, $filename);
    
        $getAccount = $this->user->find($userId);
        $getAccount->avatar = $imagePath;
        $getAccount->save();
    
        $this->dispatch('photo');
        return;
    }

  

    public function render()
    {
        $userin = $getAccount = $this->user->find(auth()->user()->id);
        return view('livewire.photo-profile', compact('userin'));
    }
}

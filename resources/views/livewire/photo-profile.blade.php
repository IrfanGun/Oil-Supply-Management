<div class="bg-white w-full rounded-lg p-3 font-poppins">
    <div class="m-auto text-center items-center rounded-full font-poppins overflow-hidden  object-center w-32 h-32 "> 
       <img  src="{{ Storage::url($userin->avatar) }}"  alt=""  class="items-center object-cover h-36 aspect-auto" width="150">
    </div>
    <div class="mt-4 text-[13px] items-center text-center">Selamat datang {{auth()->user()->name}}</div>
    <div class="mt-3 m-auto items-center mx-auto text-center">
        <label class="shadow-sm py-1 px-2 text-center m-auto text-[11px] rounded-lg hover:border-none hover:shadow-lg cursor-pointer" for="dropzone-file">Ganti Profil</label>

        <secondary-button />
        <a class="shadow-sm py-1 px-2 text-center m-auto text-[11px] rounded-lg hover:border-none hover:shadow-lg" href="{{route('profile.edit')}}">Pengaturan Akun</a>
    </div>

  @error('photo')
    <div class="mt-3 p-2 bg-vanilla-strawberry text-tomato text-sm text-center">
        <i class="fa-solid fa-circle-exclamation"></i>
        <span class="px-2">{{$message}}</span>
    </div>
  @enderror
 
        
 
    {{-- Change Photo Profile  --}}
    <input id="dropzone-file" type="file"  wire:model ="photo" hidden/>
    



</div>

  

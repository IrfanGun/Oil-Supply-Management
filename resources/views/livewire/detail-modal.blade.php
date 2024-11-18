<div>
    <div class="bg-whte rounded-lg font-poppins " >
        <div class="w-full justify-center items-center m-auto">
            <div  class="text-md mx-auto items-center  font-semibold text-center my-3">
                <span>Profile</span>
            </div>
         
        </div>
        <div class=" m-auto pb-3 relative h-32 items-center " >
            <div class=" relative w-full h-16  m-auto justify-center items-center rounded-t-lg">
                <img class="rounded-full m-auto items-center flexible p-[2px] border-blue-500 border-2  bg-white z-1 translate-y-4" src="{{ Storage::url($user-> avatar) }}" alt="" height="auto" width="100px">
            </div>
        
        </div>
        <div class="p-3 font-medium text-sm">
            <div class="  ">
                <label class=" ml-3 w-52">
                    Nama
                </label>
                <div class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6]">
                    {{$user->name}}
                </div>
            </div>
            <div class="mt-2 ">
                <label class=" ml-3 w-52">
                    Username
                </label>
                <div class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6]">
                    {{$user->username}}
                </div>
            </div>
            <div class=" mt-2 ">
                <span class="ml-3 w-52">
                    Email
                </span>
                <div class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6]">
                    {{$user->email}}
                </div>
            </div>
         
            <div class=" mt-2 ">
                <span class=" ml-3 w-52">
                    Kota
                </span>
                <div class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6]">
                    {{$user->kota}}
                </div>
            </div>
            <div class=" mt-2 ">
                <span class="ml-3 w-52">
                    Nomor Telepon
                </span>
                <div class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6]">
                    {{$user->no_hp}}
                </div>
            </div>
         
            
            <div class=" mt-2 ">
                <span  class="ml-3 w-52">
                    Saldo
                </span>
                <div class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6]">
                   Rp {{$user->saldo->saldo}}
                </div>
            </div>
            <div class="py-3 mt-4 w-full ">
                <button wire:click="delete" class="  text-[12px] justify-items-end bg-misty-rose text-red-600 py-1 rounded-full outline-none px-4" wire:click="delete">
                    <i class=" my-auto fa-solid fa-trash-can"></i>
                    <span class="ml-2 my-auto">
                        Hapus
                    </span>
             </button>
            </div>
        </div>
        
        

    </div>
</div>

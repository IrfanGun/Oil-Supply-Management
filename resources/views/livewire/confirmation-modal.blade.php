<div class="my-2">
    
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
             
            </div>
            
            
    
        </div>
    </div>
    
    <div class="px-6 py-2 ">
        <div class="grid gap-2 grid-cols-[repeat(auto-fit,minmax(0,1fr))]">
            <button wire:click = "decline"
                    class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border-none transition-colors outline-none f min-h-[2.25rem] px-4 text-sm text-gray-800 bg-reddish-white  hover:bg-gray-50 " wire:click="decline">
                    <span class="flex items-center gap-1">
                        <span class="">
                            Tolak
                        </span>
                    </span>
                </button>

            <button wire:click="accept"
                    class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none min-h-[2.25rem] px-4 text-sm text-white focus:ring-white border-transparent bg-red-600 hover:bg-red-500 focus:bg-red-700 focus:ring-offset-red-700" wire:click ="accept">

                    <span class="flex items-center gap-1">
                        <span class="">
                            Terima
                        </span>
                    </span>

                </button>
        </div>
    </div>
</div>

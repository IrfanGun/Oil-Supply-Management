@php
use Carbon\Carbon;
@endphp

    <div class="md:w-full mx-auto mr-3 mt-2">
        <div class=  "flex text-charleston-green  space-x-4  justify-around ">
          
            {{-- User Total --}}
           
                <div class="bg-yellow-sea ml-8 w-full  m-auto  overflow-hidden  rounded-lg flex  box-content pl-2 py-2 pr-10 cursor-pointer hover:shadow-[10px_10px_30px_0px_#cfcfcf] hover:bg-[#e69b05]"  wire:click="$dispatch('openModal', { component: 'top-up-modal'})" >
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-house-user fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5">
                        <h1 class="font-poppins m-auto mt-1 text-white font-medium text-sm">Tarik Uang</h1>
                
                    </div> 
                </div>
          

            {{-- Pending User --}}
           
                <div class="bg-white  m-auto  overflow-hidden rounded-lg flex w-full box-content pl-2 py-2 pr-10">
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-hourglass-half fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5">
                        <h1 class="font-poppins m-auto mt-1 w-full text-sm">Transaksi</h1>
                        <span>{{$transactions}}</span>
                    </div> 
                </div>
           
            {{-- Verified User --}}
            
                <div class="bg-white  m-auto  overflow-hidden rounded-lg flex w-full box-content pl-2 py-2 pr-10">
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-clipboard-check fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5 h-8 ">
                        <h1 class="font-poppins m-auto text-sm">Saldo </h1>
                        <div class="flex text-[12px]">
                            <p>Rp</p>
                            <span class="font-poppins m-auto ml-1">{{$saldo->saldo}}</span>
                        </div>
                       
                    </div> 
                </div>
            
        </div>
    </div>

 







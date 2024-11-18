<div>
    <div class="w-full mt-3 ">
        <div class=  "flex text-charleston-green  space-x-8  justify-around ">
          
            {{-- User Total --}}           
                <div class="bg-yellow-sea ml-8 w-full  m-auto  overflow-hidden  rounded-lg flex  box-content pl-2 py-2 pr-10 cursor-pointer hover:shadow-[10px_10px_30px_0px_#cfcfcf] hover:bg-[#e69b05]" wire:click="$dispatch('openModal', { component: 'modal-suplai' })" >
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-house-user fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5">
                        <h1 class="font-poppins m-auto mt-1 text-white font-medium text-sm ">Setoran</h1>
                        <span class="font-poppins m-auto mt-1 text-white font-medium text-[12px]">{{$recentSupply->pasokan}} L</span>
                    </div> 
                </div>
            
            {{-- Pending User --}}
                <div class="bg-white  m-auto  overflow-hidden rounded-lg flex w-full box-content pl-2 py-2 pr-10">
                    <div class="rounded-full bg-cultured w-8 h-8 items-center flex box-content text-sm my-auto">
                        <i class="fa-solid fa-hourglass-half fa-lg text-charleston-green m-auto text-sm "></i>
                    </div>
                    <div class="ml-5 text-[12px]">
                        <h1 class="font-poppins m-auto mt-1 w-full ">Volume </h1>
                        <span class="font-poppins m-auto font-medium">{{ $totalSupply }} L</span>
                    </div> 
                </div>
           
            {{-- Verified User --}}
                <div class="bg-white  m-auto  overflow-hidden rounded-lg flex w-full box-content pl-2 py-2 pr-10">
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-clipboard-check fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5 h-8 ">
                        <h1 class="font-poppins m-auto text-sm ">Saldo </h1>
                        <div class="flex text-[12px] ">
                            <h2>Rp </h2>
                            <span class="font-poppins m-auto text-charleston-green w-max ml-1 ">     {{$saldoTotal->saldo}}</span>
                        </div>
                    </div> 
                </div>
        </div>
    </div>
</div>

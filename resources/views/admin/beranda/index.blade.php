<x-app-layout>

    {{-- Header Box --}}
    <div class="w-full mt-3 ">
        <div class=  "md:flex text-charleston-green  space-x-8 space-y-2 md:space-y-0 w-full justify-around ">
          
            {{-- User Total --}}
           
                <div class="bg-white ml-8 md:w-full  m-auto  overflow-hidden  rounded-lg flex  box-content pl-2 py-2 pr-10">
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-house-user fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5">
                        <h1 class="font-poppins m-auto mt-1 text-sm">Pengguna</h1>
                        <div class="flex">
                            <div class="text-[22px] font-semibold">{{$dataCount}}</div>
                            
                            @if ($newUser > 0)
                            <div class="text-green-sheen px-3 py-[2px] rounded-xl bg-aero-blue ml-2 my-auto text-[12px] font-semibold flex">
                                <i class="fa-solid fa-caret-up text-green-sheen fa-lg my-auto"></i>
                                <h1 class="ml-2 my-auto">{{$newUser}}</h1>
                            </div>
                            @endif
                        </div>
                    </div> 
                </div>
          

            {{-- Pending User --}}
           
                <div class="bg-white  m-auto  overflow-hidden rounded-lg flex md:w-full box-content pl-2 py-2 pr-10">
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-hourglass-half fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5">
                        <h1 class="font-poppins m-auto mt-1 text-sm">Menunggu</h1>
                        <div class="flex">
                            <div class="text-[22px] font-semibold">{{$userPending}}</div>
                   
                        </div>
                    </div> 
                </div>
           
            {{-- Verified User --}}
            
                <div class="bg-white  m-auto  overflow-hidden rounded-lg flex md:w-full box-content pl-2 py-2 pr-10">
                    <div class="p-1 rounded-full bg-cultured w-8 h-8 items-center flex box-content my-auto">
                        <i class="fa-solid fa-clipboard-check fa-lg text-charleston-green m-auto "></i>
                    </div>
                    <div class="ml-5">
                        <h1 class="font-poppins m-auto mt-1 text-sm">Terverifikasi</h1>
                        <div class="flex">
                            <div class="text-[22px] font-semibold">{{$userVerified}}</div>
                        </div>
                    </div> 
                </div>
            
        </div>
    </div>
    <div class="md:flex  md:justify-stretch w-full md:space-x-4 ">
           
     
        <div class="md:w-full  ">
            @livewire('user-pending-list')
        </div>
        <div class="bg-white ml-8  md:p-3 md:w-[30%] h-auto rounded-lg mt-4" >
            <x-chartjs-component width="1000" height="1300px" :chart="$chart" />
        </div>
        
    </div>
   
        {{-- User Table List --}}
    <div class="w-full ">
        @livewire('user-search')
    </div>
 
        
   


</x-app-layout>

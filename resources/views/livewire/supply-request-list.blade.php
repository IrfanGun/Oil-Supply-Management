@php
    use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">

    <div class="relative overflow-x-auto mx-auto px-4 sm:rounded-lg py-3">
        <table class="w-full table-auto text-left text-[12px] rtl:text-right ">
            <thead class=" text-gray-400   bg-blue  h-10">
                <tr class="h-2">
                    <th class="mr-auto p-2 font-medium font-poppins text-center h-2">
                        <span>Username</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins  text-center h-2">
                        <span>ID suplai</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins  text-center h-2" >
                        <span>Kota</span>
                    </th >
                    <th class="mr-auto p-2 font-medium font-poppins  text-center  h-2">
                        <span>Waktu Permintaan</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins  text-center  h-2">
                        <span>Status</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins  text-center  h-2" >
                        <span>Volume</span>
                    </th>
                    <th class="mr-auto my-auto  item-center text-center bg-green h-2 w-10 box-conten">
          
                    </th>
                    
              
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($supplyList as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer"  >
                        <td class="pr-2 pl-1 py-2 rounded-l-full ">
                        {{ $user->suplai['username'] }}
                          
                        </td>
                        <td class="px-3 py-2 ">
                            {{ $user->id}}
                        </td>
                        <td class="px-3 py-2">
                            {{ $user->suplai['kota']}}
                        </td>
                        <td class="px-2 py-2">
                            {{  Carbon::parse($user->suplai['created_at'])->format('d M Y') }}
                        </td>
                        <td class="px-3 py-2">
                                @if ($user->menunggu == 1)
                                <div class="m-auto text-burly-wood px-4 py-[1px] rounded-full bg-linen text-[10px] font-light">
                                    Menunggu
                                </div>
                                @endif
                                @if ($user->diterima == 1)
                                <div class="m-auto text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan">
                                    Terverifikasi
                                </div>
                                @endif  
                                @if ($user->ditolak == 1)
                                <div class="m-auto text-tomato text-center bg-vanilla-strawberry px-4 py-[1px] font-light rounded-full text-[10px]">
                                    Ditolak
                                </div>
                                @endif  
                        </td>
                       <td class="px-3 py-2">
                            {{$user->pasokan}}
                       </td>
                        
                        <td class="rounded-r-full">
                            <button class="hover:bg-white rounded-full text-charleston-green text-[16px] w-8 h-8"
                            wire:click="$dispatch('openModal', {component : 'supply-confirmation', arguments : { suplai : {{ $user->id }} }})">
                             <i class="fa-solid fa-clipboard-check"></i>
                             </button>
                        </td >
                      
                     
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center justify-center font-poppins">Data belum tersedia</td>
                    </tr>
               
                @endforelse
               
            </tbody>
           
        </table>
    </div>
    

</div>

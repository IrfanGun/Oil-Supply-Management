@php
use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">
    <div class="relative overflow-x-auto mx-auto px-4 rounded-lg py-3">
        <table class="w-full table-auto text-[12px] text-left   ">
            <thead class="font-poppins text-gray-400 bg-blue  h-10">
                <tr class="h-2">
                    <th class="mr-auto p-2 font-medium text-center h-2">
                        <span>Username</span>
                    
                    </th>
                    <th class="mr-auto p-2 font-medium text-center h-2">
                        <span>ID suplai</span>
                       
                    </th>
                    <th class="mr-auto p-2 font-medium text-center h-2" >
                        <span>Kota</span>
                     
                    </th >
                    <th class="mr-auto p-2 font-medium  text-center  h-2">
                        <span>Waktu Permintaan</span>
                    </th>
                    <th class="mr-auto text-center p-2 font-medium h-2">
                        <span>Status</span>
                     
                    </th>
                    <th class="mr-auto my-auto  item-center text-center bg-green h-2  box-content">
                 
                    </th>
                    
              
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($deliveryList as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer" >
                        <td class=" py-2 px-4 rounded-l-full ">
                           {{ $user->pengiriman['username'] }}

                        </td>
                        <td class="px-3 py-2 m-auto ">
                            {{ $user->id}}
                        </td>
                         <td class="px-3 py-2">
                            {{ $user->pengiriman['kota']}}
                        </td>
                        <td class="px-3 my-auto py-2">
                            <span class="text-center my-auto">
                                {{  Carbon::parse
                                    ($user->created_at)->format('d M Y') }}
                                </td>
                                </span>
                        <td class="px-3 py-2">
                                @if ($user->menunggu == 1)
                                <div class="m-auto text-burly-wood px-4 py-[1px] rounded-full bg-linen text-[10px] font-light">
                                    Menunggu
                                </div>
                                @endif
                                
                        </td>
                        <td class="rounded-r-full">
                             <button class="hover:bg-white rounded-full text-charleston-green text-[16px] w-8 h-8 mr-1"
                                    wire:click="$dispatch('openModal', {component : 'delivery-confirmation', arguments : { pengiriman : {{ $user->id }} }})">
                                    <i class="fa-solid fa-clipboard-check"></i>
                            </button>
                        </td>
                       
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-[12px] font-poppins">
                            Data Belum Tersedia
                        </td>
                    </tr>
             
                @endforelse
               
            </tbody>
           
        </table>
    </div>
</div>

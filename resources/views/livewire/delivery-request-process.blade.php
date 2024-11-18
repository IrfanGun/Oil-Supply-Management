@php
use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">
    <div class="relative overflow-x-auto  mx-auto px-4 py-3 ">
        <table class="w-full table-auto text-[12px] text-left ">
            <thead class=" text-gray-400 bg-blue font-poppins  h-10">
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
                    <th class="mr-auto p-2 font-medium text-center  h-2">
                        <span>Waktu Permintaan</span>
                    </th>
                    <th class="mr-auto p-2 font-medium text-center  h-2">
                        <span>Status</span>
                    </th>
                    <th class="mr-auto my-auto  item-center text-center bg-green h-2  box-conten">
                 
                    </th>
                    
              
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($deliveryProcess as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer" >
                        <td class="px-4 py-2 rounded-l-full ">
                            {{ $user->pengiriman['username'] }}
                        </td>
                        <td class="px-3 py-2 ">
                            {{ $user->id}}
                        </td>
                         <td class="px-3 py-2">
                            {{ $user->pengiriman['kota']}}
                        </td>
                        <td class="px-2 py-2">
                            {{  Carbon::parse($user->created_at)->format('d M Y') }}
                        </td>
                        <td class="px-3 py-2">
                            <div class="m-auto text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan">
                                Diproses
                            </div>
                                
                        </td>
                        <td class="rounded-r-full">
                             <button class="hover:bg-white rounded-full text-charleston-green text-[16px] w-8 h-8 mr-1"
                                    wire:click="$dispatch('openModal', {component : 'delivery-pro-confirm', arguments : { pengiriman : {{ $user->id }} }})">
                                    <i class="fa-solid fa-clipboard-check"></i>
                            </button>
                        </td>
                        @empty
                        <td colspan="6" class="text-center font-poppins text-[12px]">
                            Data Belum Tersedia
                        </td>
                    </tr>
             
                @endforelse
               
            </tbody>
           
        </table>
    </div>
</div>

@php
    use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">

    <div class="relative overflow-x-auto mx-auto px-4 sm:rounded-lg py-3" x-data="{modalOpen : false}">
        <table class="w-full table-auto text-sm text-left rtl:text-right ">
            <thead class="text-sm text-gray-400 bg-blue  h-10">
                <tr class="h-2">
                    <th class="mr-auto font-medium text-center h-2">
                        <span>No ID</span>
                   
                    </th>
                    <th class="mr-auto font-medium text-center  h-2">
                        <span>Waktu Permintaan</span>
                    </th>
                    <th class="mr-auto font-medium text-center  h-2">
                        <span>Status</span>
                       
                    </th>
                    <th class="mr-auto font-medium text-center  h-2"  >
                        <span>Volume</span>
                    </th>
                    <th class="mr-auto font-medium text-center  h-2" >
                        <span>Pendapatan</span>
                </th>
                    <th class="mr-auto my-auto font-medium item-center text-center bg-green h-2 w-10 box-content">
                    </th>           
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($userRequest as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer"  >
                        <td class="px-3 py-2 rounded-l-full ">
                            {{ $user->id}}
                        </td>
                       
                        <td class="px-2 py-2">
                            {{  Carbon::parse($user->created_at)->format('d M Y') }}
                        </td>
                        <td class="px-3 py-2">
                                @if ($user->menunggu == 1)
                                <div class="m-auto text-burly-wood px-4 py-[1px] rounded-full bg-linen text-[10px] font-light text-center">
                                    Menunggu
                                </div>
                                @endif
                                @if ($user->diterima == 1)
                                <div class="m-auto text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan">
                                    Terverifikasi
                                </div>
                                @endif  
                                @if ( $user->ditolak == 1 )
                                <div class="m-auto text-tomato text-center bg-vanilla-strawberry px-4 py-[1px] font-light rounded-full text-[10px]">
                                    Ditolak
                                </div>
                                @endif  
                        </td>
                        <td class="px-3 py-2">
                                {{$user->pasokan}}
                        </td>
                       <td class="px-3 py-2" x-on:click=" modalOpen : true" x-data = "{isOpen : @entangle('OpenModal')}">

                       Rp {{ $user->pendapatan }}
                      
                        </td>
                        
                        <td class="rounded-r-full">
                            <button class="hover:bg-white rounded-full text-charleston-green text-[16px] w-8 h-8"
                            wire:click="$dispatch('openModal', { component: 'modal-sup-delete', arguments: { userSupply : {{ $user->id }} }})">
                             <i class="fa-solid fa-trash"></i>
                             </button>
                        </td >
                        @empty
                        <td colspan="6" class="text-center justify-center">Tidak ada data</td>
                    </tr>
               
                @endforelse
               
            </tbody>
        </table>
    </div>
</div>


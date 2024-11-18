@php
use Carbon\Carbon;
@endphp

<div>
    {{-- The whole world belongs to you. --}}

    <div class="mx-auto ml-8 mr-3 md:mr-0 rounded-lg bg-white mt-4">
        <div class="relative overflow-x-auto mx-auto px-4 sm:rounded-lg py-3" x-data="{modalOpen : false}">
            <table class="w-full md:table-auto text-sm text-left rtl:text-right ">
                <thead class="text-sm text-gray-400 bg-blue  h-10">
                    <tr class="h-2">
                        <th class="mr-auto text-center w-24 py-2 h-2">
                            <span>ID Transaksi</span>
                        </th>
                        <th class="mr-auto text-center w-24 py-2 h-2">
                            <span>Bank</span>
                        </th>
                        <th class="mr-auto text-center  w-24  py-2 h-2">
                            <span>No. Rekening</span>
                        </th>
                        <th class="mr-auto text-center  w-24  py-2 h-2">
                            <span>Nominal</span>
                           
                        </th>
                        <th class="mr-auto text-center  w-24  py-2 h-2"  >
                            <span> Status</span>
                        </th>
                        <th class="mr-auto text-center  w-36  py-2 h-2" >
                            <span>Tgl Permintaan</span>
                        </th>
                           
                    </tr>
                </thead> 
                <tbody class="rounded-full">
                    @forelse ($transactions as $transaction)
                        <tr
                            class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                            peer" x-data="{show : false}" @click = "show = !show" @click.outside="show = false" >
                            <td class=" w-24  py-2 rounded-l-full  text-center">
                                <span>
                                    {{ $transaction->id}}
                                </span>      
                            </td>
                            <td class=" w-24  py-2 text-center">
                                <span>
                                    {{ $transaction->transfer_bank}}
                                </span>      
                            </td>
                            <td class=" w-24  py-2 text-center">
                                <span class="m-auto">
                                    {{$transaction->no_rekening}}
                                </span>
                            </td>
                            <td class=" w-24  py-2 text-center">
                                <span>
                                    {{ $transaction->nominal_transaksi}}
                                </span> 
                            </td>
                            <td class="w-24 py-2 ">

                                 

                                    @if ($transaction->berhasil == 1)
                                    <div class="m-auto text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan text-center">
                                    Berhasil
                                    </div>
                                    @endif  
                                    @if ($transaction->gagal == 1)
                                    <div class="m-auto text-tomato  bg-vanilla-strawberry px-4 py-[1px] font-light rounded-full text-center text-[10px]">
                                    Ditolak
                                    </div>
                                    @endif  
                            </td>
                            <td class="w-36 py-2 text-center ">
                                <span>
                                    {{  Carbon::parse($transaction->created_at)->format('d M Y') }}
                                </span>
                            </td>
                            <td class="rounded-r-full">
                                <button class="hover:bg-white rounded-full text-charleston-green text-[16px] w-8 h-8"
                                wire:click="$dispatch('openModal', { component: 'user-view-trans-img', arguments: { 'transId' : {{ $transaction->id }} }})">
                                 <i class="fa-solid fa-eye"></i>
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
</div>

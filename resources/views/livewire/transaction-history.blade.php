@php
    use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">

    <div class="relative overflow-x-auto mx-auto px-4 sm:rounded-lg py-3">
        <table class="w-full table-auto text-[12px] text-left rtl:text-right ">
            <thead class=" text-gray-400 bg-blue  h-10">
                <tr class="h-2">
                    <th class="mr-auto p-2 font-medium font-poppins text-center h-2">
                        <span>Username</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins text-center h-2">
                        <span>Bank</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins text-center px-2 h-2" >
                        <span>No Rekening</span>
                    </th >
                    <th class="mr-auto p-2 font-medium font-poppins text-center px-2 h-2">
                        <span>Nominal Transfer</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins text-center px-2 h-2">
                        <span>Waktu Permintaan</span>
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins text-center px-2 h-2">
                        <span>Status</span>
                    </th>
              
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($transactionHistory as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer" x-data="{show : false}" @click = "show = !show" @click.outside="show = false" >
                        <td class="pr-2 pl-1 py-2 rounded-l-full ">
                        {{ $user->riwayatPenarikan['username'] }}
                        </td>
                        <td class="px-3 py-2 ">
                            {{ $user->transfer_bank}}
                        </td>
                        <td class="px-3 py-2 ">
                            {{ $user->no_rekening}}
                        </td>
                        <td class="px-3 py-2">
                            <span>Rp </span>
                            {{ $user->nominal_transaksi}}
                        </td>
                        <td class="px-2 py-2">
                            {{  Carbon::parse($user->created_at)->format('d M Y') }}
                        </td>
                       <td class="px-3 py-2 rounded-r-full">
                        @if ($user->berhasil == 1)
                        <div class="m-auto text-green-sheen px-4 py-[1px] font-light rounded-full text-[10px] bg-aero-blue">
                            Diselesaikan
                        </div>
                        @endif  
                        @if ($user->gagal == 1)
                        <div class="m-auto text-tomato text-center bg-vanilla-strawberry px-4 py-[1px] font-light rounded-full text-[10px]">
                            Ditolak
                        </div>
                        @endif  
                       </td>
                        
                        <td class="rounded-r-full">
                        
                        </td >
                        @empty
                        <td colspan="6" class="text-center justify-center font-poppins">Data belum tersedia</td>
                    </tr>
               
                @endforelse
               
            </tbody>
           
        </table>
      
    </div>

</div>



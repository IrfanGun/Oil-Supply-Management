@php
    use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">

    <div class="relative overflow-x-auto mx-auto px-4 sm:rounded-lg py-3" x-data="{modalOpen : false}">
        <table class="w-full table-auto text-sm text-left rtl:text-right ">
            <thead class="text-sm text-gray-400 bg-blue  h-10">
                <tr class="h-2">
                    <th class="mr-auto font-medium text-center h-2">
                        <span>ID Suplai</span>
                   
                    </th>
                    <th class="mr-auto font-medium text-center px-4 h-2">
                        <span>Waktu </span>
                    </th>
                    <th class="mr-auto text-center font-medium  h-2">
                        <span>Status</span>
                    </th>
                    <th class="mr-auto text-center font-medium h-2">
                        <span>Kota</span>
                    </th>       
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($userReDeliver as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer" x-data="{show : false}" @click = "show = !show" @click.outside="show = false" >
                   
                        <td class="px-3 py-2 rounded-l-full ">
                            {{ $user->suplai_id}}
                        </td>
                       
                        <td class=" m-auto py-2 px-4">
                            {{  Carbon::parse($user->created_at)->format('d M Y') }}
                        </td>
                        <td class="px-3 py-2">
                                @if ($user->menunggu == 1)
                                <div class="m-auto text-burly-wood px-4 py-[1px] rounded-full bg-linen text-[10px] font-light">
                                    Menunggu
                                </div>
                                @endif
                                @if ($user->diterima == 1)
                                <div class="m-auto text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan">
                                    Diterima
                                </div>
                                @endif  
                             
                        </td>
                        <td class="px-3 py-2 rounded-r-full ">
                                {{$user->kota}}
                        </td>
                        

                        @empty
                        <td colspan="6" class="text-center justify-center">Tidak ada data</td>
                    </tr>
               
                @endforelse
               
            </tbody>
           
        </table>

          
    </div>
</div>


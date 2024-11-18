@php
    use Carbon\Carbon;
@endphp
<div class="mx-auto ml-8 rounded-lg bg-white mt-4">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div class="relative overflow-x-auto mx-auto px-4 sm:rounded-lg py-3">
        <table class="w-full table-auto text-[12px] text-left rtl:text-right ">
            <thead class=" text-gray-400 bg-blue fo h-10">
                <tr class="h-2">
                    <th class="mr-auto p-2 font-medium font-poppins  text-center h-2">
                        <span>Username</span>
                       
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins  text-center h-2">
                        <span>ID suplai</span>
                     
                    </th>
                    <th class="mr-auto p-2 font-medium font-poppins  text-center h-2" >
                        <span>Kota</span>
                 
                    </th >
                    <th class="mr-auto text-center p-2 font-medium font-poppins  h-2">
                        <span>Waktu Permintaan</span>
                    </th>
                    <th class="mr-auto text-center p-2 font-medium font-poppins   h-2">
                        <span>Status</span>
                  
                    </th>
                    <th class="mr-auto text-center p-2 font-medium font-poppins   h-2"  >   
                            <span>Volume</span>
                    </th>
                    <th class="mr-auto my-auto  item-center text-center bg-green h-2 w-10 box-conten">
                    </th>
                    
              
                </tr>
            </thead> 
            <tbody class="rounded-full">
                @forelse ($supplyProcess as $user)
                    <tr
                        class="bg-white rounded-full font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f9f9f9] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer">
                        <td class="px-4 py-2 rounded-l-full" >
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
                                <div class="m-auto text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan">
                                    Diproses
                                </div>
                        </td>
                       <td class="px-3 py-2">
                            {{$user->pasokan}} L
                       </td>
                        
                        <td class="rounded-r-full">
                            <button class="hover:bg-white rounded-full text-charleston-green text-[16px] w-8 h-8"
                                    wire:click="$dispatch('openModal', {component : 'supply-process-modal', arguments : { suplai : {{ $user->id }} }})">
                                     <i class="fa-solid fa-clipboard-check"></i>
                            </button>
                        </td>
                 
                    </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center font-poppins justify-center">Data belum tersedia</td>
                </tr>
          
                @endforelse
               
            </tbody>
           
        </table>
      
    </div>    
    

</div>



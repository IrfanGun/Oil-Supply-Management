@php
    use Carbon\Carbon;
@endphp
<div class="mx-auto overflow-x-scroll ml-8 rounded-lg bg-white mt-4 font-poppins">

    <div class = "p-1 m-auto">
        <div class=" mx-auto py-3 my-2 ml-3 rounded-lg flex justify-between">
                <div class="relative  flex text-[12px]">
                    <span>Daftar Pengguna</span>
                </div>
           <div class="px-3 flex" >
                <div class="relative flex ">
                    <div class=" bg-[#f4f4f6] absolute inset-y-0 start-0 flex items-center ps-3 pe-2 rounded-l-full pointer-events-none">
                        <svg class="w-4 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" name="" id="default-search" wire:model.live="search" class="block border-transparent bg-[#f4f4f6] focus:border-transparent rounded-full focus:ring-0 w-full  ps-10 text-sm text-gray-900 outline-non border-none focus:outline-none focus:border-none " placeholder="Cari Nama" >
                    
                </div>
            
                <button class="bg-white-smoke rounded-full text-sm ml-2 w-10 h-10 px-2 py-2 hover:bg-[#ebebee] active:bg-[#ebebee] duration-100" wire:click="$dispatch('openModal', {component : 'add-user'})">
                    <i class="fa-solid fa-user-plus text-charleston-green m-auto" ></i>
                </button>

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

            </div>

        </div>

    </div>

    <div class="relative  mx-auto px-4 sm:rounded-lg font-poppins font-medium">
        <table class="w-full table-auto text-sm text-left rtl:text-right  ">
            <thead class="text-[12px] text-gray-400 bg-blue h-10  md:text-sm">
                <tr class="h-2  ">
                    <th class="font-medium mr-auto text-center h-2">
                        <span>Nama</span>

                    </th>
                    <th class="font-medium mr-auto text-center h-2">
                        <span>Username</span>
                        
                    </th>
                    <th class="font-medium mr-auto text-center h-2" >
                        <span>Kota</span>
                      
                    </th >
                    <th class="font-medium mr-auto text-center  h-2">
                        <span>No Hp</span>
                    </th>
                    <th class="font-medium mr-auto text-center  h-2">
                        <span>Status</span>
                 
                    </th>

                    <th class="font-medium  mr-auto text-center  h-2" x-data="{ show : false}" >
                            <span>Waktu</span>
                          
                     
                    </th>
             
                    
              
                </tr>
            </thead> 
            <tbody class="rounded-full text-[12px]">
                @forelse ($users as $user)
                    <tr
                        class="bg-white rounded-full text-center font-poppins  dark:bg-gray-800 dark:border-gray-700 hover:bg-[#f4f4f6] font-medium text-charleston-green dark:hover:bg-gray-600 w-50  cursor-pointer
                        peer" wire:click="$dispatch('openModal', {component : 'detail-modal', arguments : { user : {{ $user->id }} }})">
                        <td class="px-3 py-2 m-auto rounded-l-full ">
                            <div class="flex">
                                <img class="rounded-full hidden md:block " src="{{ Storage::url($user->avatar) }}" alt="" height="auto" width="45px">
                                <span class="my-auto ml-3">{{ $user->name }}</span> 
                            </div>
                          
                        </td>
                        <td class="px-3 text-center">
                            {{ $user->username }}
                        </td>
                        <td class="px-3 py-2 text-center">
                            {{ $user->kota }}
                        </td>
                        <td class="px-3 py-2  text-center">
                            {{ $user->no_hp }}
                        </td>
                        <td class="px-3 py-2  text-center">
                            @if ($user->status == 'pending')
                            <div class="m-auto text-burly-wood px-4 py-[1px] rounded-full bg-linen text-[10px] font-light">
                                Menunggu
                            </div>
                            @endif
                            @if ($user->status == 'terverifikasi')
                            <div class="m-auto  text-center text-medium-aquamarine px-4 py-[1px] font-light rounded-full text-[10px] bg-light-cyan">
                                Terverifikasi
                            </div>
                            @endif  
                            @if ($user->status == 'ditolak')
                            <div class="m-auto   text-tomato text-center bg-vanilla-strawberry px-4 py-[1px] font-light rounded-full text-[10px]">
                                Ditolak
                            </div>
                                
                            @endif  
                        </td>
                        <td class=" rounded-r-full text-center px-3 ">
                            {{  Carbon::parse($user->created_at)->format('d M Y') }}
                        </td>
                   
                       
                    </tr>
                    @empty
                    <tr colspan="6"   class="text-center">
                        Data Belum Tersedia
                    </tr>
             
                @endforelse
               
            </tbody>
           
        </table>
        <div class="px-4 py-6">
            {{$users->links()}}
        </div>
    </div>

</div>


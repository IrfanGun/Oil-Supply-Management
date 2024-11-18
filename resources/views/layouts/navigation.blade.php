<nav x-data="{ open: false }" class="bg-white px-2 md:px-7">
    <!-- Primary Navigation Menu -->
    <div class=" hidden md:block md:w-36 my-auto  ">
        <div class="flex justify-between h-20 text-xs">
            <div>

                <!-- Logo -->
                <div class="shrink-0 flex space-x-8">
                    <a href="{{ route('admin.beranda.index') }}">
                        <img src="{{Storage::url('profile/logo-comp.png')}}" >
                    </a>
                </div>

                {{-- Profile --}}
                <div>
                    <h1>

                    </h1>
                    <h2>

                    </h2>
                </div>

                {{-- Navigation Group --}}
                <div>
                    <h1 class="pt-10">Menu</h1>
                </div>

               
                <div class="space-y-3 font-poppins text-sm">

                    @role('admin')
                    <div class="flex w-30">
                        <x-nav-link class=" rounded-xl " :href="route('admin.beranda.index')" :active="request()->routeIs('admin.beranda.index')" >
                            <i class="fa-solid fa-house mr-3 my-auto w-4"></i>
                            <div>Beranda</div>
                        </x-nav-link>
                    </div>
                    
                    <div class="flex w-30">
                        <x-nav-link  :href="route('admin.suplai.index')" :active="request()->routeIs('admin.suplai.index')" >
                            <i class="fa-solid fa-gas-pump mr-3 my-auto w-4" ></i>
                            <div>Suplai</div>
                        </x-nav-link>
                    </div>

                    <div class="flex w-30">
                        <x-nav-link  :href="route('admin.penjemputan.index')" :active="request()->routeIs('admin.penjemputan.index')" >
                            <i class="fa-solid fa-truck-fast mr-3 my-auto w-4"></i>
                            <div>Penjemputan</div>
                        </x-nav-link>
                    </div>
                    

                    <div class="flex w-30">
                        <x-nav-link  :href="route('admin.transaksi.index')" :active="request()->routeIs('admin.transaksi.index')" >
                            <i class="fa-solid fa-right-left mr-3 my-auto w-4"></i>
                            <div>Transaksi</div>
                        </x-nav-link>
                    </div>

            
                    
                    @endrole

                    @role('pelanggan')
                    <div class="flex w-30">
                        <x-nav-link class=" rounded-xl " :href="route('suplai.home')" :active="request()->routeIs('suplai.home')" >
                            <i class="fa-solid fa-house mr-3 my-auto w-4"></i>
                            <div>Beranda</div>
                        </x-nav-link>
                    </div>

                    <div class="flex w-30">
                        <x-nav-link  :href="route('penjemputan.show')" :active="request()->routeIs('penjemputan.show')" >
                            <i class="fa-solid fa-truck-fast mr-3 my-auto w-4"></i>
                            <div>Penjemputan</div>
                        </x-nav-link>
                    </div>
                    

                    <div class="flex w-30">
                        <x-nav-link  :href="route('transaksi.dompet')" :active="request()->routeIs('transaksi.dompet')" >
                            <i class="fa-solid fa-right-left mr-3 my-auto w-4"></i>
                            <div>Transaksi</div>
                        </x-nav-link>
                    </div>

                    @endrole
                    <div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Mobile Navigation Menu --}}
    <div class=" h-full flex-shrink items-center md:hidden space-y-6">
    
        <div class="shrink-0 flex space-y-4 mt-3">
            <a href="{{ route('suplai.home') }}">
                <img src="{{Storage::url('profile/logo-responsive.png')}}" width="40" >
            </a>
        </div>

        @role('admin')

        <div class="flex-shrink mt-10 space-y-2">
            <x-responsive-nav-link  class="items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('admin.beranda.index')" :active="request()->routeIs('admin.beranda.index')">
                <i class="fa-solid fa-house m-auto"></i>
            </x-responsive-nav-link >
    
            <x-responsive-nav-link  class="items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('admin.penjemputan.index')" :active="request()->routeIs('admin.penjemputan.index')">
                <i class="fa-solid fa-truck-fast m-auto"></i>
            </x-responsive-nav-link >
    
            <x-responsive-nav-link class=" items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('admin.transaksi.index')" :active="request()->routeIs('admin.transaksi.index')">
                <i class="fa-solid fa-right-left  m-auto"></i>
    
            </x-responsive-nav-link>

          
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link class=" items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            <i class="fa-solid fa-right-from-bracket  m-auto"></i>
                    </x-responsive-nav-link>
                </form>
    
         
        @endrole


        @role('pelanggan')

        <div class="flex-shrink mt-10 space-y-2">
            <x-responsive-nav-link  class="items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('suplai.home')" :active="request()->routeIs('suplai.home')">
                <i class="fa-solid fa-house m-auto"></i>
            </x-responsive-nav-link >
    
            <x-responsive-nav-link  class="items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('penjemputan.show')" :active="request()->routeIs('penjemputan.show')">
                <i class="fa-solid fa-truck-fast m-auto"></i>
            </x-responsive-nav-link >
    
            <x-responsive-nav-link class=" items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"  :href="route('transaksi.dompet')" :active="request()->routeIs('transaksi.dompet')">
                <i class="fa-solid fa-right-left  m-auto"></i>
    
            </x-responsive-nav-link>

            <x-responsive-nav-link class=" items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" >
                <i class="fa-solid fa-right-from-bracket  m-auto"></i>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    </x-dropdown-link>
                </form>
            </x-responsive-nav-link>
            @endrole
        </div>     
    </div>
</nav>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700,800,900">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles()
    </head>
    
    @livewireScripts()
    <body class="font-inter  bg-[#f4f4f6] antialiased">
        <div class="min-h-screen bg-[#f4f4f6]  flex" x-data="{ hidden: true }">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            @role('admin')
            <div      
            x-data="{
                dispatched : false,
                message : null
              }"
              x-init="
              Echo.private('chat-channel.{{ auth()->id() }}').listen('chat', (event) => {
                dispatched = true,
                message = event.message,
                setTimeout(()=>{
                    dispatched = false;
                }, 5000)

                
              } )
              "  
             class >
            <template x-if="dispatched"   >
                <div class=" mt-2 fixed m-auto p-2 font-poppins rounded-md justify-items-center transition duration-500 opacity-100 w-full z-20 " x-transition:leave="transition ease-in duration-300"
                x-transition:leave-end="opacity-0 scale-90">
                    <div class="relative  p-1 bg-white  rounded-lg shadow-lg">
                      
                      
                        <div class="flex items-center ">
                            <div class=" px-2 py-1  rounded-full bg-[#f4f4f6]">
                                <i class="fa-solid fa-envelope fa-beat"></i>
                            </div>
                      
                          <div class="ml-3 text-sm overflow-hidden">
                            <p class="font-medium text-gray-900 text-[12px]"><span x-text="message.sender.username" ></span></p>
                            <p class="max-w-xs  text-gray-500 text-[10px] truncate" x-text="message.message">
                           
                            </p>
                          </div>
                          <button onClick='return this.parentNode.remove()'
                          >
                          <i class="fa-solid p-1 fa-xmark hover:bg-[#f4f4f6] rounded-md -top-1 text-[12px] left-0 "></i>
                          </button>
                        </div>
                      </div>
                </div>
               
            </template>
            </div>
            @endrole
            <!-- Page Content -->
          
            <main 
            class="w-full justify-items-end">
         
           
                <button id="toggleButton" class="shadow-sm hover:shadow-lg shadown-sm bg-white px-2 py-1 rounded-md hover:border-none md:hidden justify-items-end items-end"  >
                    <i class="fa-solid fa-bars m-auto"></i>
                </button>
                {{ $slot }}
            </main>
    

            <aside class="h-full max-h-screen z-10 md:ml-5 bg-[#f4f4f6] bg-opacity-50 backdrop-blur-sm md:backdrop-blur-none flex-col w-full hidden  md:block space-y-4 fixed overflow-y-auto md:overflow-y-visible  justify-items-end md:justify-items-start md:relative duration-100 ease-in-out no-scrollbar" id="myContent" >

                {{-- Photo Profile --}}
                <div class="w-[250px] mt-3  backdrop-blur-none ">
                    <livewire:photo-profile>
                    
                </div>
                            
                {{-- Calendar --}}
                <div class="w-[250px]">
                   @include('layouts.calendar')
                </div>
        
                <!-- Live Chat Floating -->
                <div x-data="{ open: false }" class=" w-[250px] mt-5 pb-2 ">
                    <div  x-transition >
                      <livewire:floating-chat>
                    </div>
                </div>
        
            </aside>
           
        </div>
       
       
         

        @livewire('wire-elements-modal')
    </body>

    <script>
        
        const toggleButton = document.getElementById('toggleButton');
        const content = document.getElementById('myContent');

        const toggleContent = () => {
        content.classList.toggle('hidden');
        };

        toggleButton.addEventListener('click', toggleContent);
        ;
        window.onclick = function(e) {
            if(e.target == myContent) {
                myContent.classList.toggle('hidden')
            }
        }

    </script>
   
   
</html>

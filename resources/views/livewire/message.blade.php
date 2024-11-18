<div class=" relative font-poppins " >
   
    <div class="h-[220px] overflow-y-auto  scrollbar-hide " id="conversation"  >
      <div
      class="mx-auto relative max-w-md " id ="heightBody" >
    

        @foreach ($messages as $message)
        @if ($message['sender'] != auth()->user()->username)
        <div class="w-max max-w-sm m-4 px-4 py-2 text-charleston-green rounded-2xl justify-self-start rounded-br-none  bg-gray-100 text-[12px]">
          {{$message['message']}}
        </div>
        @else
        <div  class="w-max text-wrap h-auto m-4 px-4 py-2 flex-col  rounded-full rounded-bl-none text-white font-light bg-blue-500 truncate text-right justify-self-end text-[12px] ">
          {{$message['message']}}
        </div>

        @endif
     
        @endforeach
    
        </div>


       
        
    </div>
    
    
      

      <div  class=" bg-white mt-1 ">
        <form wire:submit="submitMessage " class="flex">
          
          <textarea wire:model="message" cols="30" rows="1"  name="message" id="" class=" rounded-full bg-[#f4f4f6] focus:border-transparent focus:ring-0 focus:border-none text-sm resize-none border-none no-scrollbar mr-1"></textarea>

        
          <button type="submit" class="bg-tomato hover:bg-red-500 text-white rounded-full px-[9px]"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
      
      </div>
      
      @script
    <script >
     
      window.addEventListener('scrollDown', () => {
        let container = document.getElementById('conversation');
        container.scrollTop = container.scrollHeight;
        
        Livewire.hook('morph.updating', () => {
          container.scrollTop = container.scrollHeight; } )
          
        })
  
    </script>
    @endscript
</div>

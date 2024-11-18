<div>

    <div class="p-3 ">
        <div>
    
            <div class="p-4 space-y-2 text-center dark:text-white">
                <h2 class="text-xl font-bold tracking-tight" id="page-action.heading">
                    Konfirmasi Penjemputan
                </h2>
    
                <p class="text-gray-500">
                    Apakah Anda ingin menerima permintaan ini ?
                </p>
            </div>
    
        </div>
        
        <div class="space-y-2">
            <div aria-hidden="true" class="border-t dark:border-gray-700 px-2"></div>
    
            <div class="px-6 py-2">
                <div class="grid gap-2 grid-cols-[repeat(auto-fit,minmax(0,1fr))]">
                    <button type="button"
                            class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border-none transition-colors outline-none f min-h-[2.25rem] px-4 text-sm text-gray-800 bg-reddish-white  hover:bg-gray-50 " wire:click="decline">
                            <span class="flex items-center gap-1">
                                <span >
                                    Tolak
                                </span>
                            </span>
                        </button>
    
                    <button 
                            class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none min-h-[2.25rem] px-4 text-sm text-white focus:ring-white border-transparent bg-red-600 hover:bg-red-500 focus:bg-red-700 focus:ring-offset-red-700" wire:click ="accept">
    
                            <span class="flex items-center gap-1">
                                <span >
                                    Terima
                                </span>
                            </span>
    
                        </button>
                </div>
            </div>
        </div>
    
    </div>

</div>


<div class="p-3 ">
    <div>

        <div class="p-4 space-y-2 text-center dark:text-white">
            <h2 class="text-xl font-bold tracking-tight" id="page-action.heading">
                Konfirmasi Permintaan
            </h2>

            <p class="text-gray-500">
                Apakah Anda ingin menerima permintaan ini?
            </p>

          @error('provenBank')
          <span>Tidak ada data yang diinput</span>
              
          @enderror
        </div>

    </div>

    <div></div>

    <input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" id="submitImg" wire:model="provenBank">
    
    <div class="space-y-2">
        <div aria-hidden="true" class="border-t dark:border-gray-700 px-2"></div>

        <div class="px-6 py-2">
            <div class="grid gap-2 grid-cols-[repeat(auto-fit,minmax(0,1fr))]">
                <button type="button"
                        class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border-none transition-colors outline-none f min-h-[2.25rem] px-4 text-sm text-gray-800 bg-reddish-white  hover:bg-gray-50 "  id="cancel">
                        <span class="flex items-center gap-1">
                            <span class="">
                                Tolak
                            </span>
                        </span>
                    </button>

                <button 
                        class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none min-h-[2.25rem] px-4 text-sm text-white focus:ring-white border-transparent bg-red-600 hover:bg-red-500 focus:bg-red-700 focus:ring-offset-red-700" id="confirm" wire:click ="accept" type="submit" wire:model="checkFile" >

                        <span class="flex items-center gap-1">
                            <span class="">
                                Terima
                            </span>
                        </span>

                    </button>
            </div>
        </div>
    </div>

</div>

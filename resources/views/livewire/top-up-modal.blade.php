<div>
    {{-- Be like water. --}}
    <div class="p-6 font-poppins">

        <form method="POST" action="{{ route('transaksi.penarikan')}}" enctype="multipart/form-data" >
            @csrf
        
            {{-- Account Number --}}
            <div>
                <x-input-label for="no_rekening" :value="__('No Rekening')" />
                <input id="no_rekening"class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white"  type="numver" name="no_rekening" :value="old('no_rekening')" required  autocomplete="no_rekening" />
                <x-input-error :messages="$errors->get('no_rekening')" class="mt-2" />
            </div>
            
            {{-- Amount --}}
            <div class = "mt-4" wire:model.live = "amount">
                <x-input-label for="nominal_transaksi" :value="__('Nominal Transaksi')" />
                <input id="nominal_transaksi" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white"  type="number" name="nominal_transaksi" :value="old('nominal_transaksi')"   autocomplete="nominal_transaksi" />
                <x-input-error :messages="$errors->get('nominal_transaksi')" class="mt-2" />
            </div>
            <div>
              @error('amount')
              <div class="mt-3 p-2 bg-vanilla-strawberry text-tomato text-sm text-center">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span class="px-2">{{$message}}</span>
            </div>
              @enderror
              
              
            </div>
        
            {{-- Bank Account --}}
            <div class = "mt-4">

                <select id="countries" class="  focus:border-white focus:ring-0 focus:border-transparent rounded-full w-full" name="transfer_bank" required>
                  <option selected>Pilih Akun Bank</option>
                  <option value="BRI">Bank Rakyat Indonesia (BRI)</option>
                  <option value="BSI">Bank Syariat Indonesa (BSI)</option>
                  <option value="Mandiri">Mandiri</option>
                </select>

                {{-- <x-input-label for="transfer_bank" :value="__('Transfer Bank')" />
                <x-text-input id="transfer_bank" class="block mt-1 w-full" type="text" name="transfer_bank" :value="old('transfer_bank')" required autocomplete="transfer_bank" />
                <x-input-error :messages="$errors->get('transfer_bank')" class="mt-2" /> --}}
            </div>
        
            <div class="items-center font-poppins mt-4">
             
                <button   class="inline-flex w-full items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none min-h-[2.25rem] px-4 text-sm text-white focus:ring-white border-transparent bg-red-600 hover:bg-red-500 focus:bg-red-700 focus:ring-offset-red-700" type="submit" {{$validData ? '' : 'disabled'}}>
                    <span>
                        Kirim
                    </span>
                </button>
            </div>
        </form> 
    </div>
</div>

    



    {{-- Stop trying to control. --}}
     
<div class="p-6 font-poppins">
        <div class="w-full justify-items-center m-auto text-center items-center py-3 text-charleston-green">
            <span class="text-md font-semibold text-center">PENDAFTARAN AKUN BARU</span>
        </div>

         <form method="POST" action="{{ route('admin.beranda.store') }}" enctype="multipart/form-data">
             @csrf
         
             <!-- Name -->
             <div>
                 <x-input-label class=" ml-3 w-52" for="name" :value="__('Nama')" />
                 <input id="name" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white" type="text" name="name" :value="old('name')" required  />
                 <x-input-error :messages="$errors->get('name')" class="mt-2" />
             </div>
             
             {{-- Username --}}
             <div class = "mt-2">
                 <x-input-label class=" ml-3 w-52" for="username" :value="__('Username')" />
                 <input id="username" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white" type="text" name="username" :value="old('username')" required />
                 <x-input-error :messages="$errors->get('username')" class="mt-2" />
             </div>
         
             {{-- Email --}}
             <div class = "mt-2">
                 <x-input-label for="email" :value="__('Email')" class=" ml-3 w-52" />
                 <input id="email" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white" type="text" name="email" :value="old('email')" required />
                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
             </div>
         
             <!-- No Hp -->
             <div class="mt-2">
                 <x-input-label for="no_hp" :value="__('No Hp')" class=" ml-3 w-52" />
                 <input id="no_hp" type="text" min=0 class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white" name="no_hp" :value="old('no_hp')" required autofocus autocomplete="no_hp" />
                 <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
             </div>
         
             {{-- Gender --}}
             <div class="mt-2">
                 <x-input-label for="gender" :value="__('Jenis Kelamin')" class=" ml-3 w-52" />
                 <select name="gender" id="gender" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white">
                     <option value="laki-laki">laki-laki</option>
                     <option value="perempuan">perempuan</option>
                 </select>
                 <x-input-error :messages="$errors->get('gender')" class="mt-2" />
             </div>
         
             {{-- Kota --}}
             <div class="mt-2">
                 <x-input-label for="kota" :value="__('Kota')" class=" ml-3 w-52" />
                 <select name="kota" id="kota" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white">
                     <option value="Jombang">Jombang</option>
                     <option value="Kediri">Kediri</option>
                     <option value="Tulungagung">Tulungagung</option>
                 </select>
                 <x-input-error :messages="$errors->get('kota')" class="mt-2" />
             </div>
         
         
         
             <!-- Password -->
             <div class="mt-2">
                 <x-input-label for="password" :value="__('Password')" class=" ml-3 w-52" />
         
                 <input id="password"  class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
         
                 <x-input-error :messages="$errors->get('password')" class="mt-2" />
             </div>
         
             <!-- Confirm Password -->
             <div class="mt-2">
                 <x-input-label for="password_confirmation" :value="__('Confirm Password')" class=" ml-3 w-52" />
         
                 <input id="password_confirmation" class="py-2 px-3 font-normal rounded-full text-[12px] text-gray-500 w-full bg-[#f4f4f6] border-none ring-0 outline-none focus:ring-0 border-white hover:border-white h focus:border-white"
                                 type="password"
                                 name="password_confirmation" required autocomplete="new-password" />
         
                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
             </div>
         
             <div class="flex items-center justify-end mt-7">
                <button type="submit" class="cursor-pointer border-none items-center bg-[#FF0004] px-10 py-3 w-full rounded-[12px]  hover:drop-shadow-[5px_5px_4px_rgba(128,0,2,0.2)]">
                    <span class="item-center m-auto text-white font-bold py-2">REGISTER</span>    
                </button>
             </div>
         </form>
     
        
    </div>
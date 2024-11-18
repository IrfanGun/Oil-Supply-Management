<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div  class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950" >
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md" >
            <h1 class="text-md text-center">
                Masukan alamat email yang kamu daftarkan 
            </h1>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email Address -->
                <div >
                    <label for="email"  class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> Email </label>
                    <input id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 bg-reddish-white focus:outline-none focus:ring-0 focus:border-transparent text-gray-500"type="email" name="email" :value="old('email')"  required >
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <button type="submit" class="cursor-pointer w-full flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-[#FF0004] hover:drop-shadow-[5px_5px_4px_rgba(128,0,2,0.2)] ">Kirim</button>
            </form>


        </div>
       
    </div>

    
</x-guest-layout>

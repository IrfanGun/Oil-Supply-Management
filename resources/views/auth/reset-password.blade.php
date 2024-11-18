<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md" >
            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" />
                    <input id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 bg-reddish-white focus:outline-none focus:ring-0 focus:border-transparent text-gray-500"  type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-2">
                    <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" />
                    <input id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 bg-reddish-white focus:outline-none focus:ring-0 focus:border-transparent text-gray-500"  type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-2">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        
                    <input id="password_confirmation" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 bg-reddish-white focus:outline-none focus:ring-0 focus:border-transparent text-gray-500"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <button type="submit" class="cursor-pointer w-full flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-[#FF0004] hover:drop-shadow-[5px_5px_4px_rgba(128,0,2,0.2)] ">Konfirmasi</button>
            </form>
        </div>


    </div>
  
</x-guest-layout>

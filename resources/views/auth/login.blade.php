<x-guest-layout>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf



        <!-- Email Address -->
        <div >
            <x-input-label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" :value="__('Email')" />
            <x-text-input id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" :value="__('Password')" />

            <x-text-input id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}

    <x-auth-session-status :status="session('status')" />
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950" :status="session('status')">
        <div class="bg-white dark:bg-gray-900  rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Selamat Datang</h1>
            <form action="{{ route('login')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Alamat Email</label>
                    <input type="email" id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="your@email.com" name="email" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                    <input type="password" id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your password" name="password" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-xs text-gray-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Lupa Password ?</a>
                    @endif
                  
                   
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none" name="remember">
                        <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Ingatkan saya</label>
                    </div>
                    <a 
                        class="text-xs text-gray-700 hover:text-charleston-green focus:outline-none focus:ring-0 focus:bg-white focus:ring-offset-2 " href="{{route('register')}}">Buat Akun</a>
                </div>
                <button type="submit" class="cursor-pointer w-full flex justify-center mb-4 py-2 px-4 border border-transparent focus:ring-0  focus:border-white rounded-md shadow-sm text-sm font-medium text-white focus:outline-none  focus:ring-offset-2 bg-[#FF0004] hover:drop-shadow-[5px_5px_4px_rgba(128,0,2,0.2)] ">Masuk</button>
            </form>
        </div>
    </div>


</x-guest-layout>

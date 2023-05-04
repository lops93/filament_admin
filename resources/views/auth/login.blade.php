<x-guest-layout>
    <div class="flex justify-center text-2xl subpixel-antialiased font-black text-main">
        <p>LOGIN</p>
    </div>
    <div class="flex justify-center">
        <img src="{{ asset('images/internet_nidankai_ninsyou_man.png') }}" alt="Image" class="w-60">
    </div>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <x-bordeless-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"> 
            <x-slot name="icon"><x-heroicon-o-mail /></x-slot>
            Email 
        </x-bordeless-input>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <!-- Password -->
        <div class="mt-10">
            <x-bordeless-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" > 
                <x-slot name="icon"><x-heroicon-o-lock-closed /></x-slot>
                Password 
            </x-bordeless-input>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded shadow-sm text-main border-main dark:bg-gray-900 dark:border-gray-700 focus:ring-main-lighter dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm font-bold text-main dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm font-bold underline rounded-md text-main dark:text-gray-400 hover:text-secondary-darker dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

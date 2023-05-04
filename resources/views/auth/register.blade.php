<x-guest-layout>
    <div class="flex justify-center text-2xl subpixel-antialiased font-black text-main">
        <p>REGISTER</p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-bordeless-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                <x-slot name="icon"><x-heroicon-o-user /></x-slot>
                Name
            </x-bordeless-input>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-8">
            <x-bordeless-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username">
                <x-slot name="icon"><x-heroicon-o-mail /></x-slot>
                Email
            </x-bordeless-input>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-8">
            <x-bordeless-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password">
                <x-slot name="icon"><x-heroicon-o-lock-closed /></x-slot>
                Password
            </x-bordeless-input>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-bordeless-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
                <x-slot name="icon"><x-heroicon-o-lock-closed /></x-slot>
                password_confirmation
            </x-bordeless-input>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm font-bold underline rounded-md text-main dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
               {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

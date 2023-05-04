<x-guest-layout>
    <div class="flex justify-center text-2xl subpixel-antialiased font-black text-main">
        <p>Forgot your password?</p>
    </div>
    <div class="flex justify-center">
        <img src="{{ asset('images/computer_password.png') }}" alt="Image" class="w-60">
    </div>
    <div class="mb-4 font-semibold text-md text-main dark:text-gray-400">
        If you forgot your password, don't worry! Simply tell us your email address and we will send you a link to reset your password. Then you can choose a new one. 
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-bordeless-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus>
                <x-slot name="icon"><x-heroicon-o-mail /></x-slot>
                Email
            </x-bordeless-input>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

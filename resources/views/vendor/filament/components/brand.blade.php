@if (filled($brand = config('filament.brand')))
    <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        <img src="{{ asset('images/filament_admin_logo.png') }}" alt="logo" class="w-full h-10">
    </div>
@endif

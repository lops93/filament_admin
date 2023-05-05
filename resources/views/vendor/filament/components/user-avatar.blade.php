@props([
    'user' => \Filament\Facades\Filament::auth()->user(),
])

<div
    {{ $attributes->class([
        'w-10 h-10 rounded-full bg-gray-200 bg-cover bg-center',
        'dark:bg-gray-900' => config('filament.dark_mode'),
    ]) }}
    @if (asset('storage/' . auth()->user()->profile_picture))
        style="background-image: url('{{ asset('storage/' . auth()->user()->profile_picture) }}')"
    @else
        style="background-image: url('{{ \Filament\Facades\Filament::getUserAvatarUrl($user) }}')"
    @endif
></div>

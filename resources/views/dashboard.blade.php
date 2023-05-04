<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-indigo-100 shadow-sm dark:bg-main-darker sm:rounded-lg">
                <div class="p-6 text-main-darker dark:text-indigo-100">
                    <div class="grid grid-cols-2 grid-rows-2 gap-4">
                        <div>
                            <p class="text-2xl">Welcome <span class="font-bold text-main-muted">{{ auth()->user()->name }}</span></p>
                        </div>
                        <div class="justify-self-end">
                            @if (auth()->user()->isSuperAdmin())
                                <x-secondary-button     
                                x-data="{ url: '{{ route('filament.pages.dashboard') }}' }"
                                x-on:click="window.location.href = url">
                                    Admin Panel
                                </x-secondary-button>
                            @endif
                        </div>
                      </div>
                    
                    @foreach (auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach
                    
                    {{ auth()->user()->isSuperAdmin() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex justify-center rounded-md bg-main px-3 py-1.5 text-sm font-semibold leading-6 text-indigo-100 shadow-sm hover:bg-secondary-darker hover:text-main focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}>
    {{ $slot }}
</button>

<div class="ml-2 mr-4">
    <button type="button" x-data="{ theme: '{ mode: 'light' }' }" x-on:click="theme === 'dark' ? theme = 'light' : theme = 'dark'" role="switch" aria-checked="false"
    class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-indigo-100 border-2 border-transparent rounded-full cursor-pointer dark:bg-main w-11 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
    >
        <span class="sr-only">Dark mode toggle</span>
        <span class="relative inline-block w-5 h-5 transition duration-200 ease-in-out transform bg-white rounded-full shadow pointer-events-none dark:translate-x-5 dark:bg-gray-800 ring-0">
            <span class="inset-0 flex items-center justify-center w-full h-full transition-opacity dark:opacity-0absolute" aria-hidden="true">
                {{ $slot }}
            </span>
        </span>
    </button>
</div>
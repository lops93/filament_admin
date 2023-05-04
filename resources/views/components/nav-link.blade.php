@props(['active'])

@php
$classes = ($active ?? false)
            ? 'px-3 py-2 text-sm font-medium text-indigo-50 bg-main-darker rounded-md'
            : 'px-3 py-2 text-sm font-medium text-indigo-100 rounded-md hover:bg-secondary hover:text-main';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }} 
</a>

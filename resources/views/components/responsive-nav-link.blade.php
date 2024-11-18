@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-100 flex '
            : 'flex';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

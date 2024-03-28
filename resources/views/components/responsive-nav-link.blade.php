@props(['active'])

@php
$classes = ($active ?? false)
            ? ''
            : '';
@endphp

<a {{ $attributes }}>
    {{ $slot }}
</a>

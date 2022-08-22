@php
$classes = 'my-3 text-xs text-gray-600 hover:text-gray-900';
@endphp

<a {{$attributes->merge(['class'=>$classes])}}">
    {{ $slot }}
</a>
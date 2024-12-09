@php
    $classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-700 group transition-color duration-300';
@endphp

<div attribute {{ $attributes(['class'=> $classes]) }}>
    {{ $slot }}
</div>
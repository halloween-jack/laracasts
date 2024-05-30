@php
    $classes =
        'p-4 border border-transparent transition-colors duration-300 hover:border-blue-800 bg-white/5 routend-xl group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}</div>

@props(['tag', 'size' => 'base'])

@php
    $classes = 'font-bold rounded-xl transition-colors duration-300 bg-white/10 hover:bg-white/25';
    if ($size === 'base') {
        $classes .= ' py-2 px-5 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' py-1 px-3 text-2xs';
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>

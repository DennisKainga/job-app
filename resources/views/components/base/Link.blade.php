@props(['label', 'link'])

<a href="{{ $link }}" wire:navigate>{{ $label }}</a>
@props(['href', 'default' => null, 'primary' => null, 'secondary' => null, 'back' => null, 'edit' => null])

@if ($default)
    <a href="{{ $href }}" class="text-paragraph-medium leading-paragraph-medium text-content-primary link link-hover">{{ $slot }}</a>
@endif

@if ($primary)
    <a href="{{ $href }}" class="w-10 bg-orange text-content-inverse p-3 rounded-full hover:rounded-xl">{{ $slot }}</a>
@endif

@if ($secondary)
    <a href="{{ $href }}" class="w-10 bg-secondary text-content-primary p-3 rounded-full hover:rounded-xl hover:bg-tertiary">{{ $slot }}</a>
@endif

@if ($back)
    <a href="{{ $href }}" class="bg-secondary flex items-center justify-center gap-2 text-orange text-label-medium leading-label-medium font-semibold rounded-full px-10 py-3 hover:rounded-xl hover:text-content-primary duration-300">{{ $slot }}</a>
@endif

@if ($edit)
    <a href="{{ $href }}" class="bg-secondary flex items-center justify-center text-content-primary p-3 rounded-full hover:rounded-xl hover:bg-tertiary hover:text-orange duration-300">{{ $slot }}</a>
@endif

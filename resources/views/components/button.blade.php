@props(['primary' => null, 'secondary' => null, 'arrows' => null, 'icon' => null])

@if ($primary)
    <button {{ $attributes }} class="bg-orange flex items-center justify-center gap-2 text-content-inverse text-label-medium leading-label-medium font-semibold rounded-full px-10 py-3 hover:rounded-xl">{{ $icon }} {{ $slot }}</button>
@endif

@if ($secondary)
    <button {{ $attributes }} class="bg-secondary flex items-center justify-center gap-2 text-orange text-label-medium leading-label-medium font-semibold rounded-full px-10 py-3 hover:rounded-xl hover:text-content-primary duration-300">{{ $icon }} {{ $slot }}</button>
@endif

@if ($arrows)
    <button {{ $attributes }} class="bg-secondary flex items-center justify-center text-content-primary p-3 rounded-full hover:rounded-xl hover:bg-tertiary hover:text-orange duration-300">{{ $slot}}</button>
@endif

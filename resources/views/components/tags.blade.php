@if ($slot == 'prime' || $slot == 'disney+')
    <span class="text-label-small leading-label-small font-semibold px-2 py-1 bg-blue text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif

@if ($slot == 'netflix' || $slot == 'youtube')
    <span class="text-label-small leading-label-small font-semibold px-2 py-1 bg-red text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif

@if ($slot == 'paramount+' || $slot == 'max')
    <span class="text-label-small leading-label-small font-semibold px-2 py-1 bg-purple text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif

@if ($slot == 'appletv')
    <span class="text-label-small leading-label-small font-semibold px-2 py-1 bg-green text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif

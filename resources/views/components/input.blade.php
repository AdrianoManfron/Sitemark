@props(['name', 'prefix' => null])

@if ($prefix)
    <span>{{ $prefix }}</span>
@endif
<input class="input bg-background-secondary w-full placeholder:text-content-tertiary" name="{{ $name }}" {{ $attributes }} />
@error($name)
    <div class="text-sm text-error">{{ $message }}</div>
@enderror

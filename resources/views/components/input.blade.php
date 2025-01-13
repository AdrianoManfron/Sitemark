@props(['name'])

<input class="input bg-secondary w-full placeholder:text-content-tertiary" name="{{ $name }}" {{ $attributes }} />
@error($name)
    <div class="text-sm text-error">{{ $message }}</div>
@enderror

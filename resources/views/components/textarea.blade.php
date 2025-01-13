@props(['name', 'value'])

<textarea {{ $attributes }} name="{{ $name }}" class="textarea bg-secondary w-full placeholder:text-content-tertiary" placeholder="Bio">{{ $value }}</textarea>
@error($name)
    <span>{{ $message }}</span>
@enderror

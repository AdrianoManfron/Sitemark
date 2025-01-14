@props(['name'])

<input class="input bg-secondary w-full placeholder:text-content-tertiary" name="{{ $name }}" {{ $attributes }} />
@error($name)
    <div class="flex items-center gap-1 text-sm text-error">
        <x-icons.close class="w-4 h-4" />
        {{ $message }}
    </div>
@enderror

@props(['name'])

<label {{ $attributes->class(['form-control w-full']) }}>
    <div class="label">
        <span class="label-text text-paragraph-medium leading-paragraph-medium text-content-primary">{{ $name }}</span>
    </div>
    {{ $slot }}
</label>

@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-paragraph']) }}>
    {{ $value ?? $slot }}
</label>

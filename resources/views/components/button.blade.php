<button type="{{ $type ?? 'button' }}"
    class="btn btn-@isset($outline)outline-@endisset{{ $color ?? 'primary' }} {{ $classes ?? '' }}"
    {{ $attributes ?? '' }}>
    {{ $slot }}
</button>
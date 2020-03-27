<button type="{{ $type ?? 'button' }}"
    class="btn @isset($size) btn-{{$size}} @endisset btn-@isset($outline)outline-@endisset{{ $color ?? 'primary' }} {{ $classes ?? '' }}"
    {{ $attributes ?? '' }}>
    {{ $slot }}
</button>
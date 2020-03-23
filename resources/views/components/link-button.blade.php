<a href="{{ $to }}" class="btn btn-@isset($outline)outline-@endisset{{ $color ?? 'default' }} {{ $classes ?? '' }}"
    role="button" {{ $attributes ?? '' }}>
    {{ $slot }}
</a>
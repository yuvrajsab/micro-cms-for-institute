<form action="{{ $action }}" method="{{ strtolower($method) !== 'get' ? 'post' : 'get' }}" class="{{ $classes ?? '' }}"
    {{ $attributes ?? '' }}>
    @csrf @method($method)

    {{ $slot }}
</form>
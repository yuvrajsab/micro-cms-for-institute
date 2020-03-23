<div id="{{ $id ?? '' }}" class="card {{ $classes ?? '' }}" {{ $attributes ?? '' }}>
    @isset($header)
    <div class="card-header">
        {{ $header }}
    </div>
    @endisset

    <div class="card-body">
        {{ $slot }}
    </div>

    @isset($footer)
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endisset
</div>
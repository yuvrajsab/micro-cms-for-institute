<div class="form-group">
    <label for="{{ $id ?? '' }}">{{ $title }}</label>

    <input type="{{ $type ?? 'text' }}" class="form-control {{ $classes ?? '' }} @error($name) is-invalid @enderror"
        id="{{ $id ?? '' }}" name="{{ $name }}" value="{{ old($name, $slot ?? '') }}" {!! $attributes ?? '' !!}>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="{{ $id ?? '' }}">{{ $title }}</label>
    <select name="{{ $name }}" class="form-control {{ $classes ?? '' }} @error($name) is-invalid @enderror"
        id="{{ $id ?? '' }}">
        {{ $slot }}
    </select>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
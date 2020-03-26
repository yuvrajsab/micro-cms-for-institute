<div class="form-group">
    <label for="{{ $id ?? '' }}">{{ $title }}</label>

    <textarea class="form-control {{ $classes ?? '' }} @error($name) is-invalid @enderror" id="{{ $id ?? '' }}"
        name="{{ $name }}" @php foreach ($attributes ?? [] as $key=> $value) {
                echo "$key=\"{$value}\"";
            }
        @endphp>{{ old($name, $slot ?? '') }}</textarea>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
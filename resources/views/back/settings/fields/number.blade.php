<div class="form-group mb-4">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           value="{{ old($field['name'], \setting($field['name'], array_get($field, 'value'))) }}"
           class="{{ array_get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
           id="{{ $field['name'] }}"
           @if( $maxAttr = array_get($field, 'max')) max="{{ $maxAttr }}" @endif
           @if( $minAttr = array_get($field, 'min')) min="{{ $minAttr }}" @endif">

    @if ($errors->has($field['name'])) <div class="invalid-feedback">{{ $errors->first($field['name']) }}</div> @endif
</div>

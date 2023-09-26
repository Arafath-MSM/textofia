<div class="form-group mb-4">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <textarea @if( $rows = Arr::get($field, 'rows') )
              rows="{{ $rows }}"
              @endif
              @if( $cols = Arr::get($field, 'cols') )
              cols="{{ $cols }}"
              @endif
              name="{{ $field['name'] }}"
              class="{{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
              id="{{ $field['name'] }}"
              placeholder="@if(Arr::get($field, 'placeholder') ){{ $field['placeholder'] }} @else {{ $field['label'] }} @endif">{{ old($field['name'], \setting($field['name'])) }}</textarea>

    @if ($errors->has($field['name'])) <div class="invalid-feedback">{{ $errors->first($field['name']) }}</div> @endif
</div>

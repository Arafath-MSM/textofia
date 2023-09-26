@php $value = ''; @endphp
@if(isset($field['value']))
    @php $value = $field['value']; @endphp
@endif

<div class="form-group mb-4">
    <label class="" for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           value="{{ old($field['name'], (setting($field['name']) ? setting($field['name']) : $value )) }}"
           class="{{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
           id="{{ $field['name'] }}"
           {{ ($field['name'] == 'active_primary_server') ? 'disabled' : '' }}
           placeholder="@if(Arr::get($field, 'placeholder') ){{ $field['placeholder'] }} @else {{ $field['label'] }} @endif"
           @if(Arr::get($field, 'attribute') ) {{ $field['attribute'] }} @endif>
    @if ($errors->has($field['name'])) <div class="invalid-feedback">{{ $errors->first($field['name']) }}</div> @endif
</div>

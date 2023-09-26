<div class="form-group mb-4">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <div class="upload-box-inner" @if( $filePath = $field['name']) style="background-image: url({{ asset('storage/'.$field['path'].$field['name'].'.png') }});" @endif>
        <div class="cam-container">
            <img src="{{ asset('site/img/camera.png') }}">
        </div>
        <input type="file"
               name="{{ $field['name'] }}"
               class="{{ array_get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
               id="{{ array_get($field, 'name') }}">
    </div>
    @if ($errors->has($field['name'])) <div class="invalid-feedback">{{ $errors->first($field['name']) }}</div> @endif
</div>

<div class="form-group mb-4">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file"
                   name="{{ $field['name'] }}"
                   class="{{ array_get( $field, 'class') }}"
                   id="{{ array_get($field, 'name') }}">
            <label class="custom-file-label" for="{{ array_get($field, 'name') }}">Choose file</label>
        </div>
    </div>
    @if( $filePath = $field['name'])
    <div class="col-lg-3 col-md-6">
        <img src="{{ asset('storage/site/'.old($field['name'], \setting($field['name']))) }}" class="card-img-top img-fluid" alt="">
    </div>
    @endif
    @if($errors->has($field['name'])) <div class="invalid-feedback">{{ $errors->first($field['name']) }}</div> @endif
</div>

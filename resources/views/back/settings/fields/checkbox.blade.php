<div class="form-group mb-4">
    <div class="col-sm-12 featured-container">
        <div class="custom-control custom-checkbox">
            <input type="hidden" name="{{ $field['name'] }}" value="0" @if(old($field['name'], \setting($field['name']))) checked="checked" @endif />
            <input type="checkbox" class="custom-control-input" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ $field['value'] }}" @if(old($field['name'], \setting($field['name']))) checked="checked" @endif >
            <label class="custom-control-label" for="{{ $field['name'] }}">{{ $field['label'] }}</label>
        </div>
    </div>
</div>

<div class="card-body">
    <div class="alert alert-info bg-info text-white border-0 fade show" role="alert">
        {{ $fields['desc'] }}
    </div>
    <div class="form-group">
        @foreach($fields['elements'] as $field)
            @includeIf('back.settings.fields.' . $field['type'] )
        @endforeach
    </div>
    <input type="submit" value="Update" class="btn btn-primary float-right">
</div>
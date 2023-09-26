@extends('layouts.back')
<div class="row">
    <div class="col-12">
        {{ Form::open(array('route' => array('admin.settings.store', 'developer_app'),'files' => true, 'method' => 'post')) }}
            @if(count(config('setting_fields.developer_app', [])) )
                @foreach(config('setting_fields.developer_app', []) as $section => $fields)
                    <div id="developer_app">
                        @include('admin.settings.sub_section')
                    </div>
                @endforeach
            @endif
        {{ Form::close() }}
    </div>
</div>
@endsection

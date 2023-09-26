@extends('layouts.back')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            {{ Form::open(array('route' => array('settings.store', 'general'),'files' => true, 'method' => 'post')) }}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General Settings</h3>
                    </div>
                    <div class="card-body">
                        @if(count(config('setting_fields.general', [])) )
                            @foreach(config('setting_fields.general', []) as $section => $fields)
                                <div id="general">
                                    @include('back.settings.sub_section')
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</section>
@endsection

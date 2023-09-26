@extends('layouts.back')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            {{ Form::open(array('route' => array('settings.store', 'mail_config'),'files' => true, 'method' => 'post')) }}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Mail Settings</h3>
                    </div>
                    <div class="card-body">
                        @if(count(config('setting_fields.mail_config', [])) )
                            @foreach(config('setting_fields.mail_config', []) as $section => $fields)
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

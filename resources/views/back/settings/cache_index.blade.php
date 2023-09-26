@extends('layouts.back')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-body">
                    <form method="POST" action="{{ url('admin/clear-cache') }}">
                        {{ csrf_field() }}
                        <input class="btn btn-primary" type="submit" value="Clear Cache"/>
                    </form>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

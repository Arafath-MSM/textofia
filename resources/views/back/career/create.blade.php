@extends('layouts.back')
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Job Add</li>
        </ol>
    </div><!-- /.col -->

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('career.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title </label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                @if ($errors->has('title'))<span class="text-danger">{!!$errors->first('title')!!}</span>@endif
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}">
                                @if ($errors->has('location'))<span class="text-danger">{!!$errors->first('location')!!}</span>@endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="schedule">Schedule</label>
                                        <select id="schedule" name="schedule" class="form-control custom-select">
                                            <option selected disabled>Select one</option>
                                            <option value="Full_Time">Full Time</option>
                                            <option value="Part_Time">Part Time</option>
                                        </select>
                                        @if ($errors->has('schedule'))<span class="text-danger">{!!$errors->first('schedule')!!}</span>@endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Publish Date </label>
                                        <input type='text' class="form-control" id="datetimepicker1" name="publish_date" value="{{ old('publish_date') }}" />
                                        @if ($errors->has('publish_date'))<span class="text-danger">{!!$errors->first('publish_date')!!}</span>@endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Job Description</label>
                                <textarea id="summernote" name="body" class="form-control" rows="4">{{ old('body') }}</textarea>
                                @if ($errors->has('body'))<span class="text-danger">{!!$errors->first('body')!!}</span>@endif
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('career.index') }}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection

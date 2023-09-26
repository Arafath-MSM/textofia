@extends('layouts.back')
@if (session()->has('updatePostSuccess'))
    @section('alerts')
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            {!! session('updatePostSuccess') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endsection
@endif
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Case Studies</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">CaseStudies Edit</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        @include('back.message')
        <form method="POST" action="{{ route('case-studies.update', $caseStudies->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $caseStudies->title }}">
                            </div>
                                @if ($errors->has('title'))<span class="text-danger">{!!$errors->first('title')!!}</span>@endif
                            <div class="form-group">
                                <label for="resume"> Excerpt</label>
                                <textarea id="resume" name="excerpt" class="form-control"
                                    rows="3">{{ $caseStudies->excerpt }}</textarea>
                                @if ($errors->has('excerpt'))<span class="text-danger">{!!$errors->first('excerpt')!!}</span>@endif
                            </div>
                            <div class="form-group">
                                <label for="body"> Description</label>
                                <textarea id="summernote" name="body" class="form-control"
                                    rows="5">{{ $caseStudies->body }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('case-studies.index') }}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection

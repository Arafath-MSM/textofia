@extends('layouts.front')
@section('content')

<section class="career">
    <div class="career-content policy-content">
        <div class="head">
            <h2>News</h2>
            <h1>{{ $news->title }}</h1>
            <p>{{$news->excerpt}}</p>
        </div>
    </div>
</section>


<section class="team-first">
    <div class="team-first-content">
        <div class="row">
            <div class="col-md-12">
                <div class="head">
                    <p>{!! $news->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.includes.newsletter')

@endsection
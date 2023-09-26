@extends('layouts.front')
@section('content')

<!--news banner section start-->
<section class="news-banner">
    <div class="news-banner-content">
        <div class="head">
            <h2>news</h2>
            <h1>Textofia's newest news, insights, and press releases from around the world.</h1>
        </div>
    </div>
</section>
<!--news banner section end-->

<!--recent news section start-->
<section class="recent-news">
    <div class="head">
        <h2>Recent news</h2>
    </div>
    <div class="recent-news-content d-flex justify-content-center flex-column align-items-center">
        @foreach($news as $row)
        <div class="box">
            <span>{{ $row->created_at->format('M, Y') }}</span>
            <h5>{{ $row->title }}</h5>
            <p>{{ strip_tags($row->excerpt) }}</p>
            <a href="{{ route('shownews', $row->slug) }}">Read more →</a>
        </div>
        @endforeach
    </div>
    <div class="load-more-btn text-center">
        <button class="btn">Load more</button>
    </div>
</section>
<!--recent news section end-->

@include('front.includes.testimonials')
@include('front.includes.newsletter')
@endsection
@extends('layouts.front')
@section('content')

<section class="blog">
    <div class="blog-content">
        <div class="head">
            <h2>Blog</h2>
            <h1>Faucibus molestie turpis malesuada feugiat.</h1>
        </div>
    </div>
</section>

<section class="recent-blog">
    <div class="recent-blog-content">
        <div class="head">
            <h2>Recent blogs</h2>
        </div>
        <div class="boxes">
             @foreach ($posts as $post)
             <div class="box" style="background: url( {{asset('/images/' . $post->image)}});">
                <div class="head">
                    <p>{{ $post->created_at->format('M, Y') }}</p>
                    <h6>{{ $post->title }}</h6>
                    <a href="{{ route('singleblog', $post->slug) }}">Read more →</a>
                </div>
                <div class="overlay1"></div>
            </div>
            @endforeach           
        </div>
        <div class="recent-blog-btn text-center">
            <button  class="btn">Load more</button>	
        </div>
    </div>
</section>

@include('front.includes.testimonials')
@include('front.includes.newsletter')
@endsection
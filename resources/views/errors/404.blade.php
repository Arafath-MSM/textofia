@extends('layouts.front')
@section('content')
<section class="error">
    <div class="error-head text-center">
        <h2>error</h2>
        <h1>Page Not Found</h1>
    </div>
    <div class="error-content text-center">
        <strong>404</strong>
        <p>We Can't Seem To Find A Page You Are Looking For</p>
        <div class="go-back-btn">
            <a class="btn" href="{{ route('home') }}">Go Back</a>
        </div>
    </div>        
</section>
@endsection

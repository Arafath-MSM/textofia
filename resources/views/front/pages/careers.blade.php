@extends('layouts.front')
@section('content')
    <section class="career pt-5">
        <div class="career-content">
            {{-- <div class="head"> --}}
                <h2>Careers</h2>
                <h1>Join Our Team and Shape the Future of Digitalization</h1>
                <p>
                    We empower our employees to be collaborative and trustworthy, providing you with experiences that
                    inspire pride and creating moments that matter. Careers with us allow you to collaborate with others to
                    make a difference in digitalization.
                </p>
            <p></p>
            {{-- </div> --}}
        </div>
    </section>
    <!--careers banner section end-->

    <!--our benefits section start-->
    <section class="our-benefit d-none">
        <div class="head">
            <div class="heading">
                <h2>DIVERSITY AND INCLUSION</h2>
                <h1>Our Benefits</h1>
            </div>

            <div class="para">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, rhoncus facilisi lorem netus. Mattis
                    amet amet, tortor eget neque phasellus in dignissim. </p>
            </div>
        </div>
        <div class="our-benefit-content">
            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>

            <div class="benefit">
                <h6>Amet enim pharetra auctor dui amet nunc nulla at.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla faucibus feugiat vel cras ac. Sed lectus
                    a, vel amet. Ornare morbi.</p>
            </div>
        </div>
    </section>
    <!--our benefits section end-->

    <!--team first section start-->
    <section class="team-first d-none">
        <div class="team-first-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2></h2>
                        <h1></h1>
                        <p></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="image">
                        <img src="" alt="team-first">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team first section end-->

    <!--open roles section start-->
    <section class="open-role">
        <div class="open-role-content">
            <h2>OPEN ROLES</h2>
            <hr>
            @if (count($careers) > 0)
                <div id="load-data">
                    <div class="data-content d-flex flex-wrap">
                        @foreach ($careers as $career)
                            <div class="content d-flex flex-column">
                                <h6>{{ $career->title }}</h6>
                                <span>{{ preg_replace('/[_]/', ' ', $career->schedule) }}</span>
                                <a href="{{ route('singlecareer', $career->slug) }}">See Job description →</a>
                            </div>
                        @endforeach
                    </div>
                    @if ($totalCount > 4)
                    <div class="data-btn text-center" id="remove-row">
                        <button data-id="{{ $career->id }}" class="btn" id="btn-more">Load more</button>
                    </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
    <!--open roles section end-->

    @include('front.includes.newsletter')
@endsection

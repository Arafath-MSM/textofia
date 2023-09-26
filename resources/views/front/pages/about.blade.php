@extends('layouts.front')
@section('content')
    <!--about-us-banner start-->
    <section class="about-us-banner pt-5">
        <div class="about-banner-content">
            <h2>About us</h2>
            <h1>Textofia is a cloud-based platform that analyzes text data. </h1>
            <p>The driving force behind what we do is to put enterprises back in control of their knowledge assets and to
                help them run, grow and evolve their business efficiently.</p>
            <p></p>
        </div>
    </section>
    <!--about-us-banner end-->

    <!--our-story section start-->
    <section class="our-story">
        <div class="our-story-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2>OUR STORY</h2>
                        <h1>Our story began <br />two years ago</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="para">
                        <p>Incorporated as Textofia in 2021 with the mission of expanding and promoting cutting edge Machine
                            Learning
                            and AI capabilities and applications in the domain of text analytics and gaining insights with
                            knowledge
                            graph intelligence.</p>
                        <p>We started off with 2 engineers to build our core text analytics module as part of the platform
                            and grew
                            our team from there. We serve some of the best-known organizations creating technological
                            solutions
                            considered the present & future of knowledge management systems.</p>
                    </div>
                    <div class="our-story-btn get-button">
                        <a class="btn" href="{{ route('contact-us') }}"><button class="btn">Get in touch</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <!--our-story section end-->

    <!--achivement section start-->
    <section class="achivement d-none">
        <div class="achivement-content">
            <div class="head">
                <h2>Milestones & Achievements.</h2>
            </div>
            <div class="boxes">
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="date">August , 2017</p>
                        <h6>Aenean lectus morbi eu mi amet id amet.</h6>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis bibendum vitae
                            diam tellus purus fames.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--achivement section end-->

    <!--core values section start-->
    <section class="core-value d-none">
        <div class="core-value-content">
            <div class="head text-center">
                <h2>CORE VALUES</h2>
                <div class="d-flex justify-content-center">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit at a facilisis senectus ut.</h1>
                </div>
            </div>
            <div class="slider2">
                <div class="owl-carousel owl-theme core">
                    <div class="slider-card2">
                        <h6>Et dolor imperdiet pulvinar.</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper a faucibus proin orci
                            sollicitudin augue. Pretium et.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--core values section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

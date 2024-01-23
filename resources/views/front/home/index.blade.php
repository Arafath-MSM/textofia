@extends('layouts.front')
@section('content')
    <!--home page banner section start-->
    <section class="home-banner">
        <div class="home-banner-content">
            <div class="row">
                <div class="col-md-6 banner1">
                    <img src="{{ asset('front/images/StickyNote.svg') }}" alt="note" class="note-paper">
                    <div class="banner-content">
                        <div class="home-banner-head">
                            <h1>We craft best-in-class Text recognition and extraction algorithms</h1>
                        </div>
                        <div class="home-banner-para">
                            <p>Textofia platform consists core text analytics, a digital content conversion pipeline and domain specific solutions with <br>generative AI.</p>
                        </div>
                        <div class="home-banner-btn">
                            <a href="#what-we-offer"><button class="btn">Explore our products</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 banner2">
                    <img src="{{ asset('front/images/calender.png') }}" alt="calender" class="calender">
                    <div class="home-banner-img">
                        <img src="{{ asset('front/images/home-banner-img.png') }}" alt="banner-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home page banner section end-->
    <div id="what-we-offer"></div>
    <section class="what-we-do">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2>WHAT WE OFFER </h2>
                        <h1>Platform and<br>
                            Solutions</h1>
                        <p>Use the potential of our platform with core text analytics and the digital content conversion
                            pipeline
                            capable of converting historical document collections into sustainable, digital archives. </p>
                    </div>
                    <div class="sub-head">
                        <div class="para1">
                            <h1>Platform</h1>
                            <p>Textofia Core analytics provides the most comprehensive set of NLP APIs
                                for software developers. </p>
                        </div>
                        <div class="para2">
                            <h1>Solutions</h1>
                            <p>We deliver solutions for different industries ranging from document information extraction, 
custom LLM development and intelligent agents using genertive AI.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                        <img src="{{ asset('front/images/textofiadiagram animation.gif') }}" id="myImg" class="desktopview">
                        <img src="{{ asset('front/images/textofiadiagram animation.gif') }}" class="mobileview" >
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01" src="{{ asset('front/images/textofiadiagram animation.gif') }}" >
                            <div id="caption"></div>
                        </div>
                    <div class="what-we-do-img d-none">
                        <!-- <img src="{{ asset('front/images/what-we-do-img.png') }}" alt="what-we-do"> -->
                        <div class="layer-content">
                            <div class="layers position-relative Layer_1">
                                <div class="l-text position-absolute">Solutions </div>
                                <div class="d-flex flex-wrap justify-content-center align-items-center box-content-3">
                                    <div class="box1 d-flex justify-content-center align-items-center div">Legal Analytics
                                    </div>
                                    <div class="box1 d-flex justify-content-center align-items-center div">Financial
                                        Data<br> Analytics </div>
                                    <div class="box1 d-flex justify-content-center align-items-center div">News Media <br>
                                        Analytics</div>
                                </div>
                            </div>

                            <div class="layers position-relative Layer_2">
                                <div class="l-text-T position-absolute">Textofia Platform</div>
                                <div class="box2 d-flex justify-content-center align-items-center div">APIs
                                </div>
                                <div class="box3 d-flex flex-wrap justify-content-center align-items-center box-content-5">
                                    <div class="box4 d-flex justify-content-center align-items-center div">Core Text <br>
                                        Analytics</div>
                                    <div class="box4 d-flex justify-content-center align-items-center div">Generative AI
                                        <br> Models
                                    </div>
                                    <div class="box4 d-flex justify-content-center align-items-center div">Knowledge <br>
                                        Graph <br> Intelligence</div>
                                    <div class="box4 d-flex justify-content-center align-items-center div">Digital Content
                                        <br> Conversion
                                    </div>
                                    <div class="box4 d-flex justify-content-center align-items-center div">Data Ingestion
                                        <br> and Integration
                                    </div>
                                </div>
                                <div class="box5 d-flex flex-wrap justify-content-center align-items-center box-content-6">
                                    <div class="box6 d-flex justify-content-center align-items-center div">Deep Learning
                                    </div>
                                    <div class="box6 d-flex justify-content-center align-items-center div">Transformers
                                    </div>
                                    <div class="box6 d-flex justify-content-center align-items-center div">Kubernetes</div>
                                    <div class="box6 d-flex justify-content-center align-items-center div">LLMs</div>
                                    <div class="box6 d-flex justify-content-center align-items-center div"> MLOps</div>
                                    <div class="box6 d-flex justify-content-center align-items-center div">Microservices
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--who we are section start-->
    <section class="what-we-are d-none">
        <div class="head text-center">
            <h2>WHO WE ARE</h2>
            <h1>We are a dedicated team of <br> engineers and scientists.</h1>
        </div>
        <div class="d-flex justify-content-center">
            <div class="para text-center">
                <p>We are a team of scientists, engineers and entrepreneurs continually testing and pushing our technology
                    to its limits </p>
            </div>
        </div>
        <div class="what-we-are-img">
            <img src="{{ asset('front/images/what-we-are-img.png') }}" alt="what-we-are-img">
        </div>
    </section>
    <!--who we are section end-->

    @include('front.includes.solution')
    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

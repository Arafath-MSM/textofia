@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner textofia-banner9 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Microservices and Containers</h1>
        </div>
        <div class="scroll text-center">
            <p>scroll down to see more details.</p>
            <i class="fa-solid fa-arrow-down-long"></i>
        </div>
    </section>
    <!--textofia banner section end-->

    <!--what is section start-->
    <section class="what-is">
        <div class="what-is-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2>What is</h2>
                        <h1>Microservices and containers</h1>
                        <p>Textofia breaks down software into independently scalable microservices which
                            are then deployed rapidly, enabling high-impact changes frequently, predictably
                            and seamlessly. This architecture allows for each service to scale or update using the
                            deployment of service proxies without disrupting other services in the application so
                            that it can be continuously delivered to end users.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia9.png') }}" alt="textofia9">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what is section end-->

    <!--advantages section start-->
    <section class="our-benefit">
        <div class="head">
            <div class="heading">
                <h2>Microservices and containers</h2>
                <h1>Advantages</h1>
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
    <!--advantages section end-->

    <!--how we different section start-->
    <section class="core-value d-none">
        <div class="core-value-content core-value-content2">
            <div class="head text-center">
                <h2>HOW WE DIFFERENT</h2>
                <div class="d-flex justify-content-center">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit at a facilisis senectus ut.</h1>
                </div>
            </div>
            <div class="slider2">
                <div class="owl-carousel owl-theme core carousel-dots">
                    <div class="slider-card2">
                        <h6>Et dolor imperdiet pulvinar.</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper a faucibus proin orci
                            sollicitudin augue. Pretium et.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how we different section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

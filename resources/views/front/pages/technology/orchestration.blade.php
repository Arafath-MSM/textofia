@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner textofia-banner10 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Micro Services Orchestration</h1>
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
                        <div class="para">
                            <p>We build our solutions on individual micro services built
                                with an orchestrator architecture assigning tasks to the
                                microservices.</p>
                        </div>
                        <p>Our applications are built with separate APIs, and treat them as services, allowing
                            for easier management and the ability to add new functionality in future releases
                            without breaking users' existing API usage. It's important to get these separate
                            APIs to communicate with each other. Textofia uses orchestration for this purpose,
                            to make decisions on how they interact when it comes to synchronous processing
                            while also coordinating and integrating individual services according to specific
                            features required. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia10.png') }}" alt="textofia10">
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
                <h2>Micro services Orchestration</h2>
                <h1>Advantages</h1>
            </div>


        </div>
        <div class="our-benefit-content">
            <div class="benefit">
                <h6>Synchronous processes</h6>
                <p>Provides a good way to control the flow of the application in synchronous
                    processes while simpler and easier to maintain</p>
            </div>

            <div class="benefit">
                <h6>Scalable orchestration on cloud-native platforms</h6>
                <p>The orchestration service in charge and is responsible for putting the other services
                    to work to achieve those aims.</p>
            </div>

            <div class="benefit">
                <h6>Improved productivity</h6>
                <p>Breaking an application down into smaller autonomous fragments makes it easier to
                    build and maintain. </p>
            </div>


            <div class="benefit">
                <h6>Optimized business functionality</h6>
                <p>Working on individual micro services serving different business functionality
                    allows teams to optimise them and focus on business capabilities instead of
                    technologies. </p>
            </div>
        </div>
    </section>
    <!--advantages section end-->

    <!--how we different section start-->
    <section class="core-value d-none">
        <div class="core-value-content core-value-content4">
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

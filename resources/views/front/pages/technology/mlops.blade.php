@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner textofia-banner8 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>MLOps</h1>
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
                            <p> End-to-end machine learning development process to design,
                                build and manage reproducible, testable, and evolvable ML
                                Applications </p>
                        </div>
                        <p>We follow MLOps practices in model development increasing the quality,
                            simplifying the management process, and automating the deployment of
                            Machine Learning and Deep Learning models in large-scale production
                            environments. It's easier to align models with business needs, as well as
                            regulatory requirements. It applies to the entire lifecycle of ML model development
                            from data gathering, model creation, orchestration and deployment.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia8.png') }}" alt="textofia8">
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
                <h2>MLOps</h2>
                <h1>Advantages</h1>
            </div>


        </div>
        <div class="our-benefit-content">
            <div class="benefit">
                <h6>Increased productivity</h6>
                <p>Creation of automated pipelines and standardization of ML workflows reduces
                    compatibility problems and quickens the construction and deployment of ML models.</p>
            </div>

            <div class="benefit">
                <h6>Reproducibility</h6>
                <p>Automating ML workflow provides reproducibility and repeatability regarding how
                    the machine learning model is deployed. </p>
            </div>

            <div class="benefit">
                <h6>Reliability</h6>
                <p>The machine learning model we get using MLOPs is highly reliable with very few
                    errors and high quality with high accuracy.</p>
            </div>

            <div class="benefit">
                <h6>Monitorability</h6>
                <p>With MLOps retraining and deployment of models become easier and helps in
                    obtaining continuous insights on model performance </p>
            </div>
        </div>
    </section>
    <!--advantages section end-->

    <!--how we different section start-->
    <section class="core-value d-none">
        <div class="core-value-content core-value-content3">
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

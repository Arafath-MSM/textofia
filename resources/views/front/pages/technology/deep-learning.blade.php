@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Deep Learning</h1>
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
                            <p> Cutting edge deep learning models for natural language processing using LLMs </p>
                        </div>

                        <p>The field of language modelling is rapidly shifting from statistical language
                            modelling to deep learning methods since they ensure a superior performance on
                            complex NLP tasks. </p><p>We use state of the art deep learning models such as
                            transformers for all our trained NLP models fine tuned on different data sets
                            achieving the best performance on several downstream applications.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia7.png') }}" alt="textofia7">
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
                <h2>Deep Learning</h2>
                <h1>Advantages</h1>
            </div>

            <div class="para d-none">
                <p>Cutting edge deeplearning models</p>
            </div>
        </div>
        <div class="our-benefit-content">
            <div class="benefit">
                <h6>Maximise use of your unstructure data</h6>
                <p>One of the biggest advantages of deep learning is its ability to work with unstructured data helping
                    businesses
                    optimize virtually every function</p>
            </div>

            <div class="benefit">
                <h6>Pre-trained models</h6>
                <p>Pre-trained models with large amounts of data save time and resources building and training ML models and
                    more efficient than custom models. </p>
            </div>

            <div class="benefit">
                <h6>Scalability</h6>
                <p>Deep learning is highly scalable due to its ability to process massive amounts of data and perform a lot
                    of
                    computations in a cost- and time-effective manner. </p>
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

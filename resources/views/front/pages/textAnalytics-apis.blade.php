@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner textofia-banner2 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Digital Content Conversion</h1>
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
                        <h2 class="d-none">What is</h2>
                        <h1 class="d-none">Digital Content Conversion</h1>
                        <p>With our robust digital content conversion pipeline, you will produce data with high information
                            content for your
                            sustainable, searchable digital archive ensuring that libraries and other institutions can
                            convert their collections
                            from paper or microfilm to a suitable online digital format efficiently and cost effectively,
                            without compromise on
                            quality, service, requirements, or outcome.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia2.png') }}" alt="textofia1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what is section end-->

    <!--key section start-->
    <section class="key2">
        <div class="key-content2">
            <div class="row ">
                <div class="col-md-6">
                    <div class="Key-content-details2">
                        <div class="head">
                            <div class="heading">
                                <h2>Digital Content Conversion</h2>
                                <h1>Key Features</h1>
                            </div>
                        </div>
                        <div class="key-content2">
                            <div class="para">
                                <h6>Digitization service</h6>
                                <p>We work with you to convert historic materials into digital form (TIFF) with
                                    exceptionally high-quality images
                                    from all different source types.</p>
                            </div>

                            <div class="para para2">
                                <h6>Conversion to METS/ALTO formats</h6>
                                <p>We help convert your digital images into a more comprehensive digital format allowing the
                                    content to be
                                    accessible by computers. </p>
                            </div>

                            <div class="para">
                                <h6>OCR rectification</h6>
                                <p>We manage projects in time, cost and quality efficient manner by distributing the OCR
                                    post-production to a
                                    network of native speaker proofreaders.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="key-img">
                        <img src="{{ asset('front/images/MacBook-Pro1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--key section end-->


    <!--how it work section start-->
    <section class="how-we-do d-none">
        <div class="how-we-do-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2>How it works</h2>
                        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod id.</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="para">
                        <p>Extract essential information from your text documents and let Artificial
                            Intelligence save your time. We provide a range of subscription options to
                            our text analytics APIs which are ready to use once subscribed. We
                            provide complete documentation on how to use the APIs, and also
                            provide third party integration such as Google sheets, Excel for few
                            packages. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work section end-->


    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

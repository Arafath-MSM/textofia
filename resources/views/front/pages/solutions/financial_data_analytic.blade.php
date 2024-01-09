@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section
        class="textofia-banner textofia-banner3 textofia-banner6 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Customised Large Language Models (LLMs)</h1>
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
                        <h1 class="d-none">Customised Large Language Models (LLMs) </h1>
                        <p>
Designing, constructing, and integrating Custom Large Language Models can be a 
complex process. We assist you in making informed technical choices, crafting 
an optimal Custom LLM solution, and seamlessly integrating it into your business 
workflows. Initially, we focus on comprehending the unique business use case for 
your Large Language Model (LLM). Further, we delve into your available data, 
assessing what resources are available to feed into the LLM.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia6.png') }}" alt="textofia6">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what is section end-->

    <!--key section start-->
    <section class="key key3 key6">
        <div class="key-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="key-img">
                        <img src="{{ asset('front/images/MacBook-Pro2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Key-content-details">
                        <div class="head">
                            <div class="heading">
                                <h2>Customised Large Language Models (LLMs)</h2>
                                <h1>Key Features</h1>
                            </div>
                        </div>
                        <div class="key-content">
                            <div class="para">
                                <h6>LLM Design</h6>
                                <p>We design the LLM architecture and build a data pipeline according to data 
preprocessing needs. This will include specific Retrieval Augmentation Generation 
(RAG) pipelines to finetune the LLM considering performance, data availability and 
system integration requirements.</p>
                            </div>

                            <div class="para">
                                <h6>Customised LLM solution</h6>
                                <p>We train, fine tune, parameter fine tune, or context learn the model to build the 
solution and carry out prompt tuning techniques to develop the customised solution.</p>
                            </div>

                            <div class="para">
                                <h6>Integrate solutions in workflows</h6>
                                <p>We would choose the right infrastructure between cloud, on premise and hybrid, and 
integrate the custom LLM solution back into your business</p>
                            </div>

                        </div>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget morbi amet, scelerisque felis.
                            Nascetur eget ultrices facilisi suspendisse quis sit vitae urna. Faucibus pretium nisl ac at
                            lacus ut mattis ornare neque. Leo integer proin sociis dolor, magna. Cras sociis fermentum,
                            sollicitudin sit dolor tellus. Feugiat tempor aliquet tristique lobortis proin.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac elit neque nunc sapien ultrices
                            pretium semper sed integer. Porttitor in netus cursus leo. Justo, odio consequat convallis
                            aenean sit id netus pulvinar sed. Viverra mattis scelerisque est fermentum condimentum massa
                            neque, at. Non phasellus mattis neque porttitor. Dapibus lorem pellentesque pulvinar vitae.
                            Laoreet dictum morbi ridiculus dui risus. Lorem urna urna adipiscing aliquet integer sagittis
                            purus purus eros. Lorem massa in eu enim vitae sed ac.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

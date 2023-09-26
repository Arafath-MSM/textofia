@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner textofia-banner3 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1> Knowledge Graph Intelligence</h1>
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
                        <h1 class="d-none"> Knowledge Graph Intelligence</h1>
                        <p>A knowledge graph is a model which is a collection of linked concepts,
                            entities, relationships and events supporting highly complex decision-making
                            by considering expert knowledge from different domains. </p>
                        <p>Glued by semantic
                            technology, it has the potential to merge all kinds of data, analyse
                            relationships, detect patterns and infer new facts from the enriched datasets. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia3.png') }}" alt="textofia1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what is section end-->

    <!--key section start-->
    <section class="key key3">
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
                                <h2>Knowledge Graph Intelligence</h2>
                                <h1>Key Features</h1>
                            </div>
                        </div>
                        <div class="key-content">
                            <div class="para">
                                <h6>Knowledge management</h6>
                                <p>It enables to capture the context and semantoics of data into a data model
                                    representing your domain, turning data into knowledge.</p>
                            </div>

                            <div class="para">
                                <h6>Query disparate data</h6>
                                <p>Knowledge graphs can enable you to have unified access to lots of diverse
                                    data allowing you to query and gain insights at scale.</p>
                            </div>

                            <div class="para">
                                <h6>Powerful insights</h6>
                                <p>Our domain specific taxonomies and vocabularies help populate a semantic
                                    model of a knowledge graph allowing for better analysis of documents and
                                    providing insights</p>
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
                        <p>By using Textofia's data model for several domains and built-in reasoning
                            engine, you will be able to create and organise data based in ontologies and
                            infer new knowledge. This makes it easy to integrate heterogeneous data
                            sources and gain new insights from them. The knowledge graph help
                            organisations to become knowledge driven with actionable insights to make
                            business decisions in full context. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

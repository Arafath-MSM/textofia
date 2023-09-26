@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section
        class="textofia-banner textofia-banner3 textofia-banner6 d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Financial Data Analytics</h1>
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
                        <h1 class="d-none">Financial Data Analytics</h1>
                        <p>Large amounts of information is a known issue in the financial services
                            industry. </p><p>Our NLP models can intent parse financial text, enrich content through
                            information extraction and analyse sentiment of corporate documents and news
                            feeds, tag unstructured data facilitates searching across thousands of digital
                            documents</p>
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
                                <h2>Financial Data Analytics</h2>
                                <h1>Key Features</h1>
                            </div>
                        </div>
                        <div class="key-content">
                            <div class="para">
                                <h6>Financial topic detection</h6>
                                <p>Analyzing text data to identify emerging financial topics in order to identify rising and
                                    falling financial market trends.</p>
                            </div>

                            <div class="para">
                                <h6>Analyse regulatory filings</h6>
                                <p>Fast-track the review of regulatory documents to capture a more complete landscape in
                                    Stock analysis
                                    and Investor relations</p>
                            </div>

                            <div class="para">
                                <h6>Risk and compliance</h6>
                                <p>Identify early warning signals to uncover and mitigate the risk in your blind spots by
                                    finding insights that
                                    move markets</p>
                            </div>

                            <div class="para">
                                <h6>Financial knowledge graph analysis</h6>
                                <p>Build your enterprise solutions on top of our Financial knowledge graph, to help organise
                                    data, detect
                                    financial crime and predict investor relations. </p>
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

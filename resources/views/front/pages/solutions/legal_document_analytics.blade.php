@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section
        class="textofia-banner textofia-banner2 textofia-banner5  d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Document Information extraction</h1>
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
                        <h1 class="d-none">Document Information extraction</h1>
                        <p>We do intelligent information extraction that automatically extracts 
structured information from unstructured or semi-structured text, 
mainly documents related to a specific business domain. This 
information can then be used for various purposes, such as 
populating databases, summarising documents, or generating 
reports.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia5.png') }}" alt="textofia5">
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
                                <h2>Document Information extraction</h2>
                                <h1>Key Features</h1>
                            </div>
                        </div>
                        <div class="key-content">
                            <div class="para">
                                <h6>Automated data extraction</h6>
                                <p>Automate the extraction of relevant information from complex business documents 
such as invoices, receipts, contract, forms etc. Our API takes document files as input 
from several formats and returns items as structured text. </p>
                            </div>

                            <div class="para">
                                <h6>Automatic summaries</h6>
                                <p>Detailed summaries are automatically generated from the information extracted from 
documents according to business needs.</p>
                            </div>

                            <div class="para">
                                <h6>Faster document processing</h6>
                                <p>Our APIs process more documents efficiently with fewer errors and difficulties 
reducing the overall time required to process multiple documents.  </p>
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

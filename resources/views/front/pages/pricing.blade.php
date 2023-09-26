@extends('layouts.front')
@section('content')
    <section class="price">
        <div class="head text-center">
            <h1>Ready to start with<br>Textofia ?</h1>
            <p>Choose the right solution that suits you</p>
        </div>

        <div class="price-content d-flex justify-content-center align-items-center d-none">
            <div class="content d-flex ">
                <div class="heading d-flex align-items-center">
                    <span>Monthly</span>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="priceSwitch" checked>
                </div>

            </div>

            <div class="content d-flex">
                <div class="heading d-flex align-items-center">
                    <span class="yearly">Yearly</span>
                </div>
                <div class="dicount d-flex align-items-center">
                    <p>10% discount</p>
                </div>
            </div>
        </div>

        <div class="price-box-content1">
            <div class="boxes d-flex justify-content-center flex-wrap">
                <div class="box">
                    <div class="head1">
                        <h2>Free/Trial</h2>
                        <span class="d-none">For personal</span>
                    </div>

                    <div class="head2">
                        <h2>$0/month</h2>
                        <span class="d-none">Tellus consequat.</span>
                    </div>
                    <div class="price-btn d-flex justify-content-center">
                        <a href="{{ url('contact-us') }}#contact"><button class="black-btn-btn">Request demo</button></a>
                    </div>
                    <div class="content1">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>1000 API hits/day</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span> <del>
                                    Analytics
                                    dashboard
                                </del>
                            </span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span> <del>Advanced Reporting
                                </del>
                            </span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="content1 content2">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-plus"></i>
                            <span>API Integrations</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                    </div>

                </div>

                <div class="box ">
                    <div class="head1">
                        <h2>Starter</h2>
                        <span class="d-none">For personal</span>
                    </div>

                    <div class="head2">
                        <h2>$70/month</h2>
                        <span class="d-none">Tellus consequat.</span>
                    </div>
                    <div class="price-btn d-flex justify-content-center">
                        <a href="{{ url('contact-us') }}#contact"><button class="white-btn-btn">Request demo</button></a>
                    </div>
                    <div class="content1">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>6,000 API hits/day</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span> Analytics
                                dashboard</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span><del>Advanced Reporting
                                </del></span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="content1 content2">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-plus"></i>
                            <span>API Integrations</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price-box-content1 price-box-content2">
            <div class="boxes d-flex justify-content-center flex-wrap">
                <div class="box border-yes ">
                    <div class="head1">
                        <h2>Standard</h2>
                        <span class="d-none">For personal</span>
                    </div>

                    <div class="head2">
                        <h2>$170/month</h2>
                        <span class="d-none">Tellus consequat.</span>
                    </div>
                    <div class="price-btn d-flex justify-content-center">
                        <a href="{{ url('contact-us') }}#contact"><button class="white-btn-btn">Request demo</button></a>
                    </div>
                    <div class="content1">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>15,000 API hits/day</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span> Analytics
                                dashboard</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span><del>Advanced Reporting
                                </del></span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="content1 content2">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-plus"></i>
                            <span>API Integrations</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                    </div>

                </div>

                <div class="box">
                    <div class="head1">
                        <h2>Business</h2>
                        <span class="d-none">For personal</span>
                    </div>

                    <div class="head2">
                        <h2>$270/month</h2>
                        <span class="d-none">Tellus consequat.</span>
                    </div>
                    <div class="price-btn d-flex justify-content-center">
                        <a href="{{ url('contact-us') }}#contact"><button class="white-btn-btn">Request demo</button></a>
                    </div>
                    <div class="content1">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>30,000 API hits/day</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span> Analytics
                                dashboard</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>Advanced Reporting
                            </span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="content1 content2">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-plus"></i>
                            <span>API Integrations</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center ">
                            <i class="fa-solid fa-plus"></i>
                            <span>CSV Integrations</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center ">
                            <i class="fa-solid fa-plus"></i>
                            <span>Google
                                Sheets Integrations</span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="head1">
                        <h2>Custom</h2>
                        <span class="d-none">For personal</span>
                    </div>

                    <div class="head2">
                        <h2> Contact
                            Sales </h2>
                        <span class="d-none">Tellus consequat.</span>
                    </div>
                    <div class="price-btn d-flex justify-content-center">
                        <a href="{{ url('contact-us') }}#contact"><button class="white-btn-btn">Request demo</button></a>
                    </div>
                    <div class="content1">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>Custom volume</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span> Analytics
                                dashboard</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="far fa-dot-circle"></i>
                            <span>Advanced Reporting
                            </span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="content1 content2">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-plus"></i>
                            <span>Custom Integrations</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center  d-none">
                            <i class="fa-solid fa-plus"></i>
                            <span>Suspendisse lacus sit.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

@extends('layouts.front')
@section('content')
    <!--team banner section start-->
    <section class="team-banner  pt-5">
        <div class="team-banner-content  ">
            {{-- <div class="head"> --}}
            <h2>Team</h2>
            <h1>Be a part of one of the greatest workplaces</h1>
            <p>Textofia is a team of people driven to empower engineers from core text analytics to knowledge graph
                intelligence to tackle a higher order of complexity in data and knowledge.</p>
            {{-- </div> --}}
        </div>
    </section>
    <!--team banner section end-->

    <!--we are belive section start-->
    <section class="we-are-belive d-none">
        <div class="we-are-belive-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2>WHAT WE BELIEVE</h2>
                        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod id.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac elit neque nunc sapien ultrices
                            pretium semper sed integer. Porttitor in netus cursus leo. Justo, odio consequat convallis
                            aenean sit id netus pulvinar sed. Viverra mattis scelerisque est fermentum condimentum massa
                            neque, at. Non phasellus mattis neque porttitor. Dapibus lorem pellentesque pulvinar vitae.
                            Laoreet dictum morbi ridiculus dui risus. Lorem urna urna adipiscing aliquet integer sagittis
                            purus purus eros. Lorem massa in eu enim vitae sed ac.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="image">
                        <img src="{{ asset('front/images/belive.png') }}" alt="belive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--we are belive section end-->

    <!--team members section start-->
    <section class="team-members p-4">
        <div class="head text-center">
            <h2>The team</h2>
            <h1>Built to empower</h1>
        </div>

        <div class="team-members-content d-flex justify-content-center flex-wrap">
            <div class="member">
                <div class="member-img">
                    <img src="{{ asset('front/images/team/saatviga-sudhahar.png') }}" alt="member1">
                </div>
                <div class="member-details text-center">
                    <h6>Saatviga Sudhahar</h6>
                    <span>Founder</span>
                    <p>
                        <a target="_blank" href="https://www.linkedin.com/in/saatviga/" style="color:#0b0b0b;">
                            <i class="fa-brands fa-linkedin" style="font-size:24px"></i>
                        </a>
                    </p>
                </div>
            </div>

            <div class="member">
                <div class="member-img">
                    <img src="{{ asset('front/images/team/shaseevan.png') }}" alt="member1">
                </div>
                <div class="member-details text-center">
                    <h6>Shaseevan Ganeshananthan</h6>
                    <span>Co-Founder & Director</span>
                    <p>
                        <a target="_blank" href="https://www.linkedin.com/in/shaseevan/" style="color:#0b0b0b;">
                            <i class="fa-brands fa-linkedin" style="font-size:24px"></i>
                        </a>
                    </p>
                </div>
            </div>

            <div class="member">
                <div class="member-img">
                    <img src="{{ asset('front/images/team/sajeev-edward.png') }}" alt="member1">
                </div>
                <div class="member-details text-center">
                    <h6>Sajeev Edward</h6>
                    <span>Marketing</span>
                    <p>
                        <a target="_blank" href="https://www.linkedin.com/in/sajeevedward/" style="color:#0b0b0b;">
                            <i class="fa-brands fa-linkedin" style="font-size:24px"></i>
                        </a>
                    </p>
                </div>
            </div>

            <div class="member">
                <div class="member-img">
                    <img src="{{ asset('front/images/team/premkumar.png') }}" alt="member1">
                </div>
                <div class="member-details text-center">
                    <h6>Premkumar Rajathurai</h6>
                    <span>Technology</span>
                    <p>
                        <a target="_blank" href="https://www.linkedin.com/in/premkumarrajathurai/" style="color:#0b0b0b;">
                            <i class="fa-brands fa-linkedin" style="font-size:24px"></i>
                        </a>
                    </p>
                </div>
            </div>


            <div class="member">
                <div class="member-img">
                    <img src="{{ asset('front/images/team/arj-wignaraja.png') }}" alt="member1">
                </div>
                <div class="member-details text-center">
                    <h6>Arj Wignaraja</h6>
                    <span>Strategy Advisor</span>
                    <p>
                        <a target="_blank" href="https://www.linkedin.com/in/arjwigs/" style="color:#0b0b0b;">
                            <i class="fa-brands fa-linkedin" style="font-size:24px"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--team members section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

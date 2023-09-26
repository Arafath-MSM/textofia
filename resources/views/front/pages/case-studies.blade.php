@extends('layouts.front')
@section('content')
    <!--case studies banner section start-->
    <section class="case-studies">
        <div class="case-studies-content">
            <div class="head">
                <h2>Case studies</h2>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio amet est sit. Vel sit odio eget nisi
                    amet scelerisque sed turpis velit. Consequat molestie ultrices quam sit. Ut tincidunt.</p>
            </div>
        </div>
    </section>
    <!--case studies banner section end-->

    <!--how we do section start-->
    <section class="how-we-do">
        <div class="how-we-do-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="head">
                        <h2>How we do</h2>
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
    <!--how we do section end-->

    <!--case studies box section start-->
    <section class="case-studies-box">
        <div class="case-studies-box-content">
            <hr>
            <div class="head">
                <h2>Case studies</h2>
            </div>

            <div class="boxes">
                @foreach ($CaseStudies as $CaseStudie)
                    <div class="box">
                        <div class="content">
                            <p class="date">{{ $CaseStudie->created_at->format('M, Y') }}</p>
                            <h6>{{ $CaseStudie->title }}</h6>
                            <p class="para">{{ $CaseStudie->excerpt }}</p>
                            <a href="{{ route('show_case_studeies', $CaseStudie->slug) }}">Read more →</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--case studies box section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

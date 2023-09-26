@extends('layouts.front')
@section('content')
    <section class="single-career">
        <section class="career  pt-5">
            <div class="career-content">
                {{-- <div class="head"> --}}
                    <h2>Career</h2>
                    <h1>Join Our Team and Shape the Future of Digitalization</h1>

                    <p>
                        We empower our employees to be collaborative and trustworthy, providing you with experiences that
                        inspire pride and creating moments that matter. Careers with us allow you to collaborate with others
                        to
                        make a difference in digitalization.
                    </p>
                    <!-- <span>Scroll down to see why we are the elites.</span> -->
            <p></p>
                {{-- </div> --}}
            </div>
        </section>

        <div class="single-career-content-body">
            <div class="row ">
                <div class="col-md-12">
                    <div class="head">
                        <h2>{{ $career->title }}</h2>
                        <div class="career-Responsibilities">
                            {!! $career->body !!} 
                             <!-- <div class="career-responsible-description">
                                <div class="job-detail">
                                    <h4>Seniority Level: Mid-Senior</h4>
                                    <h4>Employment Type: Full time</h4>
                                </div>
                                <div class="job-sub-head">
                                    <h5>Skills and Experience:</h5>
                                </div>
                                <div class= "job-content">
                                    <p>We are currently looking for a Machine Learning Engineer – Speech Recognition, to build a state-of-the-art streaming speech recognition system for domain specific real-world data. We expect you to</p>
                                </div>
                                <ul class="career-terms">
                                    <li>Explore, implement, and evaluate state-of-the-art approaches to speech recognition</li>
                                    <li>Contribute to ASR model optimization based on large scale real-world data</li>
                                    <li>Deploy and support productionizing ASR models</li>
                                    <li>Collaboratively work to improve data pipelines and tooling for continuously training and benchmarking ASR at scale</li>
                                </ul>
                            </div>
                            <div class="career-responsible-description">
                                <div class="job-sub-head">
                                    <h5>Essential Requirements:</h5>
                                </div>
                                <ul class="career-terms">
                                    <li>Bachelor’s degree in IT / Software Engineering / CS / any equal qualification</li>
                                    <li>Research or experience in Machine Learning, Deep Learning with Speech Recognition</li>
                                    <li>Experience in implementations of machine learning algorithms</li>
                                    <li>2+ years experience using Python, C++, or similar languages</li>
                                    <li>Experience with one or more deep learning frameworks, such as PyTorch, TensorFlow, MXNet, or similar tools</li>
                                    <li>Excellent written and verbal communication skills</li>
                                    <li>Ability to work autonomously and collaboratively as part of a team to both teach and learn every day</li>   
                                </ul>
                            </div>
                            <div class="career-responsible-description">
                                <div class="job-sub-head">
                                    <h5>Desired Qualifications:</h5>
                                </div>
                                <ul class="career-terms">
                                    <li>Experience with standard ASR toolkits such as Kaldi, HTK, or similar, transformer models for speech</li>
                                    <li>Experience in training and deploying ASR models</li>
                                    <li>Experience in ASR model optimisation</li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                </div> -->
                <div class="our-story-btn">
                    <a class="btn" href="mailto:contact@textofia.com">
                        <button class="btn">Apply Now</button> 
                    </a>
                </div>                
            </div>
        </div>
    </section>

    @include('front.includes.newsletter')
@endsection

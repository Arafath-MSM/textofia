@extends('layouts.front')
@section('content')
    <!--contact us banner section start-->
    <section class="contact-us-banner">
        <div class="contact-us-banner-content">
            <div class="head">
                <h2>Contact us</h2>
                <h1>Lets talk </h1>
                <p>We love engaging with new clients. If you have an inquiry about using our Text
                    analytics capabilities building or any other questions, get in touch!</p>
            </div>
        </div>
    </section>
    <!--contact us banner section end-->

    <!--contact us form section start-->
    <section class="contact-us-form">
        <div class="contact-form-content d-flex">
            <div class="form" id="contact">
                <form method="POST" action="{{ route('sendmail') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box">
                        @include('front.includes.message')
                        <div class="head">
                            <h2>Let's shape something<br>great - together</h2>
                            <p>To find out how we can help you, fill the bellow form.</p>
                        </div>
                        <div class="form-details">

                            <div class="name">
                                <label for="name">Name</label>
                                <div class="name-input">
                                    <input type="text" placeholder="First" id="fname" name="fname"
                                        value="{{ old('fname') }}" required>
                                    <input type="text" placeholder="Last" id="lname" name="lname"
                                        value="{{ old('lname') }}" required>
                                </div>
                            </div>

                            <div class="email d-flex flex-column">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="name@email.com"
                                    value="{{ old('email') }}" required>
                            </div>

                            <div class="solution">
                                <div class="para">
                                    <p>Not sure what you want exactly? See <a href="{{ url('/') }}#solutions">Solution
                                            page</a> to learn more about our Solutions</p>
                                </div>
                                <div class="select">
                                    <p class="sol-head">Solution required</p>
                                    <select id="solution" name="solution">
                                        <option value="Document Information extraction"
                                            {{ old('solution') == 'Document Information extraction' ? 'selected' : '' }}>Document Information extraction </option>
                                        <option value="Custom LLM Development"
                                            {{ old('solution') == 'Custom LLM Development' ? 'selected' : '' }}>Custom LLM Development</option>
                                        <option value="Intelligent Agents"
                                            {{ old('solution') == 'Intelligent Agents' ? 'selected' : '' }}>Intelligent Agents</option>
                                    </select>
                                </div>
                            </div>

                            <div class="description text-area">
                                <textarea id="description" name="description" placeholder="Description" value="{{ old('description') }}" required></textarea>
                            </div>
                        </div>
                        <div class="contact-us-btn">
                            <button>Get in touch</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-content-details d-flex flex-column">
                <h2>Location</h2>
                <span>#32 Spring Street, Paddington, <br> W21JA, United Kingdom</span>
                <a href="tel:+44 203 5001380" class="phone-number">+44 203 5001380</a>
                <a href="mailto:contact@textofia.com" class="contact-email">contact@textofia.com</a>
            </div>
        </div>

        <div class="contact-us-img">
            <img src="{{ asset('front/images/contact-img.png') }}" alt="contact-img">
        </div>
    </section>
    <!--contact us form section end-->

    @include('front.includes.newsletter')
@endsection

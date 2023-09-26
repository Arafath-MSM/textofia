@extends('layouts.front')
@section('content')
    <!--textofia banner section start-->
    <section class="textofia-banner d-flex justify-content-center align-items-center flex-column">
        <div class="head text-center">
            <h1>Textofia Core Analytics </h1>
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
                        <h1 class="d-none">Textofia Core Analytics </h1>
                        <p>Textofia core analytics provides text analytics APIs are the most comprehensive set of NLP APIs
                            for software developers. </p>
                        <p>We trained our models on a significant
                            amount of data that provide state-of-the-art accuracy on most common
                            NLP use-cases such as sentiment analysis, emotion detection and text
                            summarisation. </p>
                        <p>We provide APIs for keyword/topic extraction, named
                            entity extraction and disambiguation, document summarisation,
                            sentiment analysis, emotion analysis, hate speech detection, relation
                            extraction, document classification and machine translation.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-img">
                        <img src="{{ asset('front/images/textofia1.png') }}" alt="textofia1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what is section end-->

    <!--key section start-->
    <section class="key">
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
                                <h2>Textofia Core Analytics </h2>
                                <h1>Key Features</h1>
                            </div>
                        </div>
                        <div class="key-content">
                            <div class="para textofia-core-analytics">
                                <h6>Control panel</h6>
                                <p>Our analytics consists of a control panel dashboard to manage
                                    our text analytics API hits, subscriptions and payments. </p>
                            </div>

                            <div class="para textofia-core-analytics">
                                <h6>Keyword/topic extraction</h6>
                                <p>
                                    Detects keywords and keyphrases in given text that provides complete
                                    picture of the topics discussed.
                                </p>
                            </div>

                            <div class="para textofia-core-analytics">
                                <h6>Named entity extraction</h6>
                                <p>Named Entity Recognition can identify persons, organisations,
                                    places, organization and various type of entities in text.</p>
                            </div>

                            <div class="para textofia-core-analytics">
                                <h6>Document summarisation</h6>
                                <p>Summarisation identifies the sentences most pertinent to a contents’
                                    topics, and combine them to give a concise synopsis of the original
                                    source text.</p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Sentiment analysis</h6>
                                <p>It provides an analysis of the overall emotion of a text content
                                    showing whether it was postive, negative or neutral. </p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Emotion analysis</h6>
                                <p>Emotion Analysis analyses whether the underlying emotion behind
                                    textual data is Happy, Sad, Angry, Fearful, Excited or Bored.</p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Intent analysis</h6>
                                <p>It analyses whether the underlying intention behind a sentence is
                                    opinion, news, marketing, complaint, suggestion, appreciation, and
                                    query. </p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Hate speech detection</h6>
                                <p>Hate speech analysis identifies offensive language with 98% accuracy
                                    and helps in fighting online abuse and spam.</p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Relation extraction</h6>
                                <p>Relationship extraction is the extraction of grammatical and semantic
                                    connections between two entities in a piece of text.</p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Document classification</h6>
                                <p>Document Classification assigns text one or more categories allowing to
                                    structure data for better insights.</p>
                            </div>
                            <div class="para textofia-core-analytics">
                                <h6>Machine translation</h6>
                                <p>Translates documents from various european languages to english.
                                    eg: french, spanish, german, dutch, italian etc</p>
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
                        <p> With our platform businesses are able to automatically extract
                            meaning from all sorts of unstructured data, from social media posts
                            and emails to live chats and surveys, and turn it into quantitative
                            insights. By identifying trends and patterns with text analytics,
                            businesses can improve customer satisfaction detect product issues,
                            conduct market research, and monitor brand reputation, among other
                            things. It can analyze large volumes of data in a very short time, and
                            also allows to obtain results in real-time. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work section end-->

    @include('front.includes.testimonials')
    @include('front.includes.newsletter')
@endsection

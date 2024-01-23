<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('front.includes.meta')

    <!-- favicons
    ================================================== -->
    <link rel="icon" type="image/png"  href="{{ asset('favicon.ico') }}">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="google-site-verification" content="rSkF7luexco5BrQN0Xgc1InyfEOM1hggjd190Y0yLHU" />

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}?v=3.38">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">


    <!-- Google tag (gtag.js) -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8GN4GPHXQH"></script>

    <script>

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-8GN4GPHXQH');

    </script>
</head>

<body id="top">

    <!--top bar section start-->
    <div class="top-bar-content d-flex justify-content-center align-items-center">
        <!-- <div class="sticker-img">
            <img src="{{ asset('front/images/sticker-img.png') }}" alt="sticker">
        </div> -->
        <div class="top-content-para">
            <a href="{{ url('contact-us') }}">Help us build the future of tomorrow - together, come join us on our
                journey with our
                amazing team →</a>
        </div>
    </div>
    <!--top bar section end-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('front/images/main-logo.png') }}"
                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-home {{ Route::is('home') ? 'active-link' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link @if (Route::is('about-us') ||
                                Route::is('news') ||
                                Route::is('team') ||
                                Route::is('singlecareer') ||
                                Route::is('careers')) active-link @endif" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                            href="#">Company</a>
                        <div class="dropdown-menu container-fluid">
                            <div class="dropdown-mega-content">
                                <div class="heading">
                                    <div class="head">
                                        <h1>Company</h1>
                                        <p>We always look to improve our work ethics and the technologies we develop.
                                        </p>
                                    </div>
                                </div>
                                <div class="drop-para d-flex">
                                    <a href="{{ route('about-us') }}" class="@if (Route::is('about-us')) active1 @endif">
                                        <div class="para ">
                                            <span>About →</span>
                                            <p>We are passionate about the solutions we create.</p>
                                        </div>
                                    </a>

                                    {{-- <div class="para d-none">
                                        <a href="{{ route('news') }}"
                                            class="@if (Route::is('news')) active @endif">News →</a>
                                        <p>Generative AI for drafting contracts and faster contract reviews</p>
                                    </div> --}}

                                    <a href="{{ route('team') }}" class="@if (Route::is('team')) active1 @endif">
                                        <div class="para">
                                            <span>Team →</span>
                                            <p>We are a team of visionaries, scientists and engineers that drive value.</p>
                                        </div>
                                    </a>

                                    <a href="{{ route('careers') }}" class="@if (Route::is('careers')) active1 @endif">
                                        <div class="para">
                                            <span>Careers →</span>
                                            <p>View career openings and explore remote-friendly, flexible
                                                opportunities.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link  @if (Route::is('textofia-core-analytics') ||
                                Route::is('digital-content-conversion') ||
                                Route::is('knowledge-graph-intelligence')) active-link @endif" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                            href="#">Platform</a>
                        <div class="dropdown-menu container-fluid">
                            <div class="dropdown-mega-content">
                                <div class="heading">
                                    <div class="head">
                                        <h1>Platform</h1>
                                        <p>Take advantage of our Platform for core text analytics capabilities</p>
                                    </div>
                                </div>
                                <div class="drop-para d-flex">
                                    <a href="{{ route('textofia-core-analytics') }}" class="@if (Route::is('textofia-core-analytics')) active1 @endif">
                                        <div class="para ">
                                            <span>Textofia Core
                                                Analytics →</span>
                                            <p>We provide the most comprehensive set of Natural language processing APIs.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('digital-content-conversion') }}" class="@if (Route::is('digital-content-conversion')) active1 @endif">
                                        <div class="para">
                                            <span>Digital Content
                                                Conversion →</span>
                                            <p>Automatically convert historical document collections into sustainable,
                                                digital archives. </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('knowledge-graph-intelligence') }}" class="@if (Route::is('knowledge-graph-intelligence')) active1 @endif">
                                        <div class="para">
                                            <span>Knowledge Graph
                                                Intelligence →</span>
                                            <p>Graph based analysis to deliver sharper insights and identify better
                                                opportunities.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link @if (Route::is('solutions*')) active-link @endif" id="navbarDropdown "
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-auto-close="outside" href="#">Solutions </a>
                        <div class="dropdown-menu container-fluid" id="solution-navBar">
                            <div class="dropdown-mega-content">
                                <div class="heading">
                                    <div class="head">
                                        <h1>Solutions</h1>
                                        <p>Our solutions help you analyse your data and make the correct state-of-the art AI technologies.</p>
                                    </div>
                                </div>
                                <div class="drop-para d-flex">
                                    <a href="{{ route('solutions', 'document-information-extraction') }}" class="@if (Request::is('solutions/document-information-extraction')) active1 @endif">
                                        <div class="para  ">
                                            <span>Document Information extraction →</span>
                                            <p>Automatically extract structured information from
                                                unstructured documents.</p>
                                        </div>
                                    </a>

                                    <a href="{{ route('solutions', 'customised-large-language-models') }}" class="@if (Request::is('solutions/customised-large-language-models')) active1 @endif">
                                        <div class="para">
                                            <span>Customised Large Language Models →</span>
                                            <p>Customised generative models trained on your data to
                                                provide answers. </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('solutions', 'intelligent-agents') }}" class="@if (Request::is('solutions/intelligent-agents')) active1 @endif">
                                        <div class="para">
                                            <span>Intelligent Agents →</span>
                                            <p>Unlock new possibilities with LLM agents capable of performing
                                                several tasks autonomously.</p>
                                        </div>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link @if (Route::is('technology*')) active-link @endif" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-auto-close="outside" href="#">Technology</a>
                        <div class="dropdown-menu container-fluid">
                            <div class="dropdown-mega-content">
                                <div class="heading">
                                    <div class="head">
                                        <h1>Technology</h1>
                                        <p>Our Technology</p>
                                    </div>
                                </div>
                                <div class="drop-para d-flex">
                                    <a href="{{ route('technology', 'deep-learning') }}" class="@if (Request::is('technology/deep-learning')) active1 @endif">
                                        <div class="para ">
                                            <span> Deep Learning
                                                →</span>
                                            <p>Cutting edge deep learning models for natural language processing using LLMs.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('technology', 'mlops') }}" class="@if (Request::is('technology/mlops')) active1 @endif">
                                        <div class="para">
                                            <span>MLOps →</span>
                                            <p>We ensure reliable and scalable deployment of machine learning models.</p>
                                        </div>
                                    </a>

                                    <a href="{{ route('technology', 'microservices-orchestration') }}" class="@if (Request::is('technology/microservices-orchestration')) active @endif">
                                        <div class="para">
                                            <span>Micro Services
                                                Orchestration →</span>
                                            <p>Optimizing microservices communication and coordination through orchestration
                                                pattern.</p>
                                        </div>
                                    </a>

                                    <div class="para d-none">
                                        <a href="" class="@if (Request::is('technology/microservices-and-containers')) active1 @endif">
                                            Microservices and containers →</a>
                                        <p>Optimizing microservices communication and coordination through orchestration
                                            pattern.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-mega position-static d-none">
                        <a class="nav-link @if (Route::is('case-studies') || Route::is('blog')) active-link @endif" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-auto-close="outside" href="#">Resources</a>
                        <div class="dropdown-menu container-fluid">
                            <div class="dropdown-mega-content">
                                <div class="heading">
                                    <div class="head">
                                        <h1>Resources</h1>
                                        <p>You will find useful resources here for using Textofia in analysing your data
                                            needs.</p>
                                    </div>
                                </div>
                                <div class="drop-para d-flex">
                                    <div class="para  d-none">
                                        <a href=""
                                            class="@if (Route::is('case-studies')) active @endif">Case studies
                                            →</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac arcu libero dui
                                            laoreet.</p>
                                    </div>

                                    <div class="para ">
                                        <a href="{{ route('blog') }}"
                                            class="@if (Route::is('blog')) active @endif">Blog →</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac arcu libero dui
                                            laoreet.</p>
                                    </div>

                                    <div class="para">
                                        <a href="#">Support →</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac arcu libero dui
                                            laoreet.</p>
                                    </div>

                                    <div class="para">
                                        <a href="#">API Docs →</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac arcu libero dui
                                            laoreet.</p>
                                    </div>

                                    <div class="para">
                                        <a href="#">Pricing →</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac arcu libero dui
                                            laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('contact-us') ? 'active-link' : '' }}"
                            href="{{ route('contact-us') }}">Contact</a>
                    </li>

                </ul>
                <div class="login-btn float-end">
                    <a href="#"><button>Login</button></a>
                </div>
            </div>
        </div>
    </nav>
    <!--nav section end-->


    @yield('content')


    <!--footer section start-->
    <footer class="footer">
        <div class="footer-content">
            <div class="row">
                <div class="col-md-3">
                    <h6>Company</h6>
                    <div class="links links1 d-flex flex-column">
                        <a href="{{ route('about-us') }}">About</a>
                        <a href="{{ route('team') }}">Team</a>
                        <a href="{{ route('careers') }}">Careers</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Platform</h6>
                    <div class="links links2 d-flex flex-column">
                        <a href="{{ route('textofia-core-analytics') }}">Textofia Core Analytics </a>
                        <a href="{{ route('digital-content-conversion') }}">Digital Content Conversion</a>
                        <a href="{{ route('knowledge-graph-intelligence') }}">Knowledge Graph Intelligence</a>
                    </div>
                </div>
                <div class="col-md-3 space">
                    <h6>Solutions</h6>
                    <div class="links links3 d-flex flex-column">
                        <a href="{{ route('solutions', 'document-information-extraction') }}">Document Information extraction</a>
                        <a href="{{ route('solutions', 'customised-large-language-models') }}">Custom LLM Development</a>
                        <a href="{{ route('solutions', 'intelligent-agents') }}">Intelligent Agents</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Technology</h6>
                    <div class="links links4 d-flex flex-column">
                        <a href="{{ route('technology', 'deep-learning') }}">Deep Learning</a>
                        <a href="{{ route('technology', 'mlops') }}"> MLOps</a>
                        <a href="{{ route('technology', 'microservices-orchestration') }}">Microservices
                            Orchestration</a>
                    </div>
                </div>
            </div>

            <div class="row footer-middle-content">
                <div class="col-md-3">
                    <h6>Resources</h6>
                    <div class="links links5 d-flex flex-column">
                        <a href="#">Textofia API Portal</a>
                        <a href="#">Documentation</a>
                        <a href="{{ route('pricing') }}">Pricing</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Connect with us</h6>
                    <div class="links links6 d-flex flex-column">
                        <a href="https://www.facebook.com/textofia/" target="_blank">Facebook</a>
                        <a href="https://twitter.com/textofia" target="_blank">Twitter</a>
                        <a href="https://www.instagram.com/textofia/" target="_blank">Instagram</a>
                        <a href="https://www.linkedin.com/company/textofia/" target="_blank">LinkedIn </a>
                    </div>
                </div>
                <div class="col-md-3 d-none">
                    <h6>Resources</h6>
                    <div class="links links7 d-flex flex-column">
                        <a href="{{ route('blog') }}">Blog</a>
                        <a href="#">Support</a>
                        <a href="#">API Docs</a>
                        <a href="#">Pricing</a>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>

            <div class="row footer-last-content">
                <div class="col-md-2">
                    <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('cookie-policy') }}">Cookie Policy</a>
                </div>
                <div class="col-md-8">

                </div>
            </div>
            <div class="para">
                <p>Textofia and certain product names used herein are trademarks or registered trademarks of Codelantic
                    Private Limited and/or one of its subsidiaries or affiliates in The United Kingdom, Sri Lanka and/or
                    other countries. See Trademarks for appropriate markings.</p>
                <p>Copyright © {{ date('Y') }}, Codelantic Private Limited and/or its subsidiaries or affiliates.
                    All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!--footer section end-->
    <!-- Java Script
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>

    {!! google_analytics_script() !!}

    <script>
        $('.d-newsletter-btn').on('click', function() {
            var email = $("input#nemail").val()
            if (isValidEmailAddress(email)) {
                $.ajax({
                    url: '{{ route('subscribe') }}',
                    method: 'post',
                    data: {
                        'email': email,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            setTimeout(function() {
                                $('#newsletter-success').html(response.message);
                                $('#newsletter-success').removeClass('d-none');
                                $('#newsletter-error').addClass('d-none');
                            }, 200);
                        } else {
                            setTimeout(function() {
                                $('#newsletter-error').html(response.message);
                                $('#newsletter-error').removeClass('d-none');
                                $('#newsletter-success').addClass('d-none');
                            }, 200);
                        }
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status == 400) {
                            var response = JSON.parse(xhr.responseText);
                            $('#newsletter-success').addClass('d-none');
                            if (response.errors) {
                                var errorsHtml = '';
                                $.each(response.errors, function(key, value) {
                                    errorsHtml += value;
                                });
                                $('#newsletter-error').html(errorsHtml);
                                $('#newsletter-error').removeClass('d-none');
                            }
                        } else {
                            $('#newsletter-success').addClass('d-none');
                            $('#newsletter-error').html('An error occurred during the request.');
                            $('#newsletter-error').removeClass('d-none');
                        }
                    }
                });
            } else {
                setTimeout(function() {
                    $('#newsletter-error').html("Invalid Email Address");
                    $('#newsletter-error').removeClass('d-none');
                    $('#newsletter-success').addClass('d-none');
                }, 200);
            }
        });

        function isValidEmailAddress(emailAddress) {
            var pattern =
                /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        };
    </script>

    @if (Request::routeIs('careers*'))
        <script>
            $(document).ready(function() {
                $(document).on('click', '#btn-more', function() {
                    var id = $(this).data('id');
                    $("#btn-more").html("Loading....");
                    $.ajax({
                        url: '{{ url('careers-load-data') }}',
                        method: "POST",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        dataType: "text",
                        success: function(data) {
                            if (data != '') {
                                $('#remove-row').remove();
                                $('#load-data').append(data);
                            } else {
                                $('#remove-row').remove();
                            }
                        }
                    });
                });
            });
        </script>
    @endif
</body>

</html>

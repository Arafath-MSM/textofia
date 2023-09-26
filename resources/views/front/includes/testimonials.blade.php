<section class="about-our-products">
    <div class="head text-center">
        <h1>What people say about our products.</h1>
        <h2>Our technologies create exciting new possibilities for our partners.</h2>
    </div>
    <div class="slider">
        <div class="owl-carousel owl-theme products">
            @foreach ($Testimonial as $testimonial)
                <div class="slider-card">
                    <div class="d-flex justify-content-center">
                        <div class="para text-center">
                            <p>{{ $testimonial->body }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

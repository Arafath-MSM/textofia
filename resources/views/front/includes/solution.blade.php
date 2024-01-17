<section class="solution" id="solutions">
    <div class="solution-content">
        <div class="head text-center">
            <h2>Solutions</h2>
            <h1>Explore a few of our most<br>impactful solutions.</h1>
        </div>
        <div class="solution-img d-flex justify-content-center">
            <div class="document-img">
                <img src="{{ asset('front/images/document-img.png') }}" alt="document">
            </div>
            <div class="financial-img">
                <img src="{{ asset('front/images/financial-img.png') }}" alt="financial">
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center flex-wrap solution-content-2">
        <div class="document text-center">
            <h2>Document Information Extraction</h2>
            <div class="d-flex justify-content-center">
                <p>Our models use NLP techniques to automatically extract 
structured information from unstructured or semi-structured text.</p>
            </div>
            <a href="{{ route('solutions', 'document-information-extraction') }}" class="visit">Visit Solution Page →</a>
            <div class="d-flex  justify-content-center para d-none">
                <p>Pricing plans starting from $39 $24</p>
            </div>
        </div>
        <div class="financial text-center">
            <h2>Custom LLM Development</h2>
            <div class="d-flex justify-content-center">
                <p>We provide customised genertive pretrained models capable of 
analysing your data and returning answers to your queries</p>
            </div>
            <a href="{{ route('solutions', 'customised-large-language-models') }}" class="visit">Visit Solution Page →</a>
            <div class="d-flex justify-content-center para a d-none">
                <p>Pricing plans starting from $29</p>
            </div>
        </div>
    </div>
    <div class="visit-solution text-center">
        <a href="{{ url('/contact-us') }}" class="visit">Contact Us →</a>
    </div>
</section>




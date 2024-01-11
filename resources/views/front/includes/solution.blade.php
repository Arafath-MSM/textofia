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
            <h2>Custom LLM Development</h2>
            <div class="d-flex justify-content-center">
                <p>Our technology helps analysing legal contracts, identify inconsistencies, extract useful data and
                    check against current law or rules.</p>
            </div>
            <a href="{{ route('solutions', 'customised-large-language-models') }}" class="visit">Visit Solution Page →</a>
            <div class="d-flex  justify-content-center para d-none">
                <p>Pricing plans starting from $39 $24</p>
            </div>
        </div>
        <div class="financial text-center">
            <h2>Intelligent Agents</h2>
            <div class="d-flex justify-content-center">
                <p>Our NLP models can intent parse financial text, enrich content through information extraction and
                    analyse
                    sentiment of corporate documents.</p>
            </div>
            <a href="{{ route('solutions', 'intelligent-agents') }}" class="visit">Visit Solution Page →</a>
            <div class="d-flex justify-content-center para a d-none">
                <p>Pricing plans starting from $29</p>
            </div>
        </div>
    </div>
    <div class="visit-solution text-center">
        <a href="{{ url('/contact-us') }}" class="visit">Contact Us →</a>
    </div>
</section>




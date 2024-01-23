<section class="solution-section" id="solutions">
      <div class="solution-banner">
        <div class="head text-center">
          <h2>Solutions</h2>
          <h1>Explore a few of our most<br />impactful solutions.</h1>
        </div>
      </div>

      <div class="main-position">
        <div class="bottom-content">
          <div class="doc">
            <div class="img text-center">
              <img
                src="{{ asset('front/images/document-information-extraction.png') }}"
                alt="document"
              />
            </div>

            <div class="para text-center">
              <span>Document Information Extraction</span>
              <div class="para-width">
                <p>
                  Our models use NLP techniques to automatically extract
                  structured information from unstructured or semi-structured
                  text.
                </p>
              </div>
              <a href="{{ route('solutions', 'document-information-extraction') }}" class="visit">Visit Solution Page →</a>
            </div>
          </div>

          <div class="fin">
            <div class="img text-center">
              <img
                src="{{ asset('front/images/custom-llm-development.png') }}"
                alt="financial"
              />
            </div>
            <div class="para text-center">
              <span>Custom LLM Development</span>
              <div class="para-width">
                <p>
                  We provide customised genertive pretrained models capable of
                  analysing your data and returning answers to your queries.
                </p>
              </div>
              <a href="{{ route('solutions', 'customised-large-language-models') }}" class="visit">Visit Solution Page →</a>
            </div>
          </div>
        </div>

        <div class="visit-solution text-center">
          <a
            href="{{ url('/contact-us') }}"
            class="visit"
            >Contact Us →</a
          >
        </div>
      </div>
</section>
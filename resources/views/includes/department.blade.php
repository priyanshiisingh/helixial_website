    <!-- Start Department Section -->
    <section class="service-section" id="department">
        <div class="container">
            <div class="services-content mb-0 align-items-center">
                <div data-aos="fade-down" data-aos-duration="3000" style="margin-bottom: 0;">
                    <h1 class="service-title mb-2">Our <strong>Services</strong></h1>
                    <h3 class="service-subtitle mb-2"><span>Microbiology:</span> Precision diagnostic</h3>
                    <p class="service-description mb-2">Incorporating AI, next-gen sequencing, and big data, we offer
                        swift, highly precise, and personalized diagnoses of infectious diseases, including
                        non-culturable strains with their resistance to antibiotics, and cancer detection.</p>
                    <p class="service-tagline mb-3">Unwinding genomic data for next-generation diagnostics</p>
                    <div class="read-more-btn mb-4">
                        <span><a href="{{ route('pages.service.dxn1') }}">READ MORE</a></span>
                    </div>
                </div>
                <div class="services-image d-flex align-items-center justify-content-center" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="{{ asset('assets/img/client/our_services.gif') }}" alt="Lab equipment image"
                        style="max-width: 320px;">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <h2 class="service-title mb-3"><strong>Liquid Biopsy</strong></h2>
                <!-- Image Column (Left) -->
                <div class="col-md-4 text-center mb-4 mb-md-0 d-flex flex-column align-items-center justify-content-center"
                    data-aos="fade-up" data-aos-duration="3000">

                    <img src="{{ asset('assets/img/new/national-cancer-institute-XknuBmnjbKg-unsplash 1.png') }}"
                        alt="Liquid Biopsy Tube" class="img-fluid rounded" style="max-width: 260px;">
                </div>
                <!-- Content Column (Right) -->
                <div class="col-md-8 d-flex flex-column justify-content-center" data-aos="fade-down"
                    data-aos-duration="3000">
                    <!-- CancerFind -->
                    <div class="biopsy-box mt-2 mb-3">
                        <p class="mb-1"><strong>CancerFind™</strong> is a revolutionary blood-based test for
                            Multi-Cancer Early Detection (MCED). To identify the presence of various cancer types
                            through a single, non-invasive blood draw.</p>
                        <div class="read-more-btn mb-2">
                            <span><a href="{{ route('pages.service.cancerFind') }}">READ MORE</a></span>
                        </div>
                    </div>
                    <!-- CancerDetect -->
                    <div class="biopsy-box mt-2 mb-3">
                        <p class="mb-1"><strong>CancerDetect™:</strong> Personalized Liquid Biopsy for early detection
                            of cancer recurrence. With CancerDetect™, we bring next-generation cancer surveillance to
                            the forefront—empowering proactive, personalized, and data-driven oncology care.</p>
                        <div class="read-more-btn mb-2">
                            <span><a href="{{ route('pages.service.cancerDetect') }}">READ MORE</a></span>
                        </div>
                    </div>
                    <!-- AlphaLiquid100 -->
                    <div class="biopsy-box mt-2 mb-3">
                        <p class="mb-1"><strong>AlphaLiquid®100</strong> is an innovative, cutting-edge liquid biopsy
                            test that empowers personalized cancer care by detecting biomarkers across 118
                            cancer-related genes through just one blood draw.</p>
                        <p class="mb-1">This non-invasive, highly advanced test is essential for predicting a
                            patient's response or resistance to targeted therapies.</p>
                        <div class="read-more-btn mb-2">
                            <span><a href="{{ route('pages.service.alphaProfiling') }}">READ MORE</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-5">
            <img src="{{ asset('assets/img/new/home_process.svg') }}" alt="">
        </div>
    </section>
    <!-- End Department Section -->

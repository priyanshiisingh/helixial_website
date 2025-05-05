    <!-- Start Department Section -->
    <section class="tm-gray-bg" id="department">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-start">
            <h2>Our Services</h2>
            {{-- <div class="tm-section-seperator"><span></span></div> --}}
        </div>
        <div class="container">
            <div class="tm-tab-wrap">
                {{-- <div class="tm-tabs-wrap">
                    <ul class="tabs">
                        <li><i class="icofont icofont-tooth"></i>Microbiology</li>
                        <li><i class="icofont icofont-brain"></i>Immunology & Serology</li>
                        <li><i class="icofont icofont-crutches"></i>Pathology</li>
                    </ul> <!-- .tabs -->
                </div> --}}
                {{-- <div class="empty-space col-md-b60 col-xs-b40"></div> --}}
                <div class="tm-tab-content">
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Dxn1 : Precision diagnostic</span></h3>
                                        <a href="{{ route('pages.service.dxn1') }}">Read More</a>
                                        <p>Incorporating AI, next-gen sequencing, and big data, we offer swift, highly precise, and personalized diagnoses of infectious diseases, including non-culturable strains with their resistance to antibiotics, and cancer detection.</p>
                                        <h5>Unwinding genomic data for next-generation diagnostics</h5>
                                        @include('includes.human_body')
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->

                </div> <!-- .tm-tab-content -->

                <div class="tm-tab-content">
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Liquid Biopsy</span></h3>
                                        <p>CancerFind™ is a revolutionary blood-based test for Multiple Cancer Early Detection (MCED)—designed to identify the presence of various cancer types through a single, non-invasive blood draw.</p>
                                        <a href="{{ route('pages.service.cancerFind') }}">Read More</a>

                                        <div class="empty-space col-md-b30 col-xs-b30"></div>

                                        <p>CancerDetect™ : Personalized Liquid Biopsy for Early Detection of Cancer Recurrence
                                            With CancerDetect™, we bring next-generation cancer surveillance to the forefront—empowering proactive, personalized, and data-driven oncology care.</p>
                                        <a href="{{ route('pages.service.cancerDetect') }}">Read More</a>

                                        <div class="empty-space col-md-b30 col-xs-b30"></div>

                                        <p>AlphaLiquid®100 is an innovative, cutting-edge liquid biopsy test that empowers personalized cancer care by detecting biomarkers across 118 cancer-related genes through just one blood draw. This non-invasive, highly advanced test is essential for predicting a patient's response or resistance to targeted therapies</p>
                                        <a href="{{ route('pages.service.alphaProfiling') }}">Read More</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>

        {{-- <div class="empty-space col-md-b100 col-xs-b70"></div> --}}
    </section>
    <!-- End Department Section -->

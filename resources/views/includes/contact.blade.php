    <!-- Start Contact Section -->
    <section id="contact">
        <div class="tm-section-heading text-center">
            <h2>Get In Touch</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="tm-alert"></div>
                    <form action="{{ route('contact.submit') }}" class="row tm-contact-form" method="POST"  id="contact-form">
                        @csrf
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                                <input type="text" id="name" name="name" required>
                                <label>Full Name</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                              <input type="text" id="email" name="email" required>
                              <label>Email Address</label>
                          </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                                <input type="text" id="subject" name="subject" required>
                                <label>Subject</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                                <input type="text" id="phone" name="phone" required>
                                <label>Phone</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <div class="tm-form-field">
                                <textarea cols="30" rows="10" id="msg" name="msg" required></textarea>
                                <label>Your Message</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <button class="tm-btn1" type="submit" id="submit" name="submit"><span>SEND MESSAGE</span></button>
                            <div class="empty-space col-lg-b30"></div>
                        </div><!-- .col -->
                    </form>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="empty-space col-md-b0 col-xs-b40"></div>
                    <div class="tm-contact-info">
                        <div class="tm-single-contact">
                            <i class="fa fa-map-marker"></i>
                            <h3>Address</h3>
                            <p>Vadodara, Gujarat</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-single-contact">
                            <i class="fa fa-phone"></i>
                            <h3>Phone</h3>
                            <p>701-686-1759</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-single-contact">
                            <i class="fa fa-envelope"></i>
                            <h3>Email</h3>
                            <a href="mailto:Info@helixialservices.com">Info@helixialservices.com</a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                    </div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
    </section>
    <!-- End Contact Section -->
    <script>
        var contactSubmitUrl = "{{ route('contact.submit') }}";
    </script>

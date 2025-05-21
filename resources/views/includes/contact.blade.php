<!-- Start Contact Section -->
<section id="contact" class="py-5 text-white">
    <div class="container">
        <h2 class="contact-title text-center mb-5">
            <strong>Connect</strong> With Us
        </h2>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-12">
                <form action="{{ route('contact.submit') }}" method="POST" id="contact-form" class="row g-3">
                    @csrf
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-form-field">
                            <input type="text" id="name" name="name" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-form-field">
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="tm-form-field h-100">
                            <textarea id="msg" name="msg" rows="3" required placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-form-field">
                            <input type="email" id="email" name="email"  placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-form-field">
                            <input type="text" id="phone" name="phone" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex align-items-end">
                        <button type="submit" class="tm-btn1 w-100" id="submit"
                            name="submit">
                            SEND MESSAGE
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-12 mt-5">
                <div class="row text-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h5 class="fw-normal normal-text mb-1">Phone</h5>
                        <p class="fw-semibold">701-686-1759</p>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h5 class="fw-normal normal-text mb-1">Address</h5>
                        <p class="fw-semibold">Vadodara, Gujarat</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-normal normal-text mb-1">Email</h5>
                        <p class="fw-semibold">
                            <a href="mailto:Info@helixialservices.com"
                                class="text-white text-decoration-none">Info@helixialservices.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var contactSubmitUrl = "{{ route('contact.submit') }}";
    </script>
</section>
<!-- End Contact Section -->

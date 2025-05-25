<!-- Start Pricing Section -->
<section id="price">
    <div class="empty-space col-lg-b75"></div>
    <div class="empty-space col-md-b85 col-xs-b85"></div>


    <div class="about-content mb-0 pb-3 pt-6">
        <div class="w-100" data-aos="fade-right" data-aos-duration="3000">
            <h1 class="section-title">Careers</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tm-pricing-carousel owl-carousel tm-nam-tm-style1 tm-dots1">
                    <div class="tm-price-list tm-gray-bg">
                        <div class="tm-price">
                            {{-- <h3>Laboratory Technician</h3> --}}
                        </div>
                        <h2 class="tm-pricing-heading text-002735">Laboratory Technician</h2>
                        <ul class="tm-test-list text-002735">
                            <li>Perform routine lab tests and experiments</li>
                            <li>Prepare and maintain lab equipment and materials</li>
                            <li>Ensure lab safety protocols are followed</li>
                            <li>Document test results and assist in research projects</li>
                            <li>Collaborate with research teams and senior scientists</li>
                        </ul>
                        <a href="#" class="tm-btn2 apply-btn" data-target="labTechnicianModal">APPLY NOW</a>
                    </div><!-- .tm-price-list -->
                </div>

            </div><!-- .col -->
        </div><!-- .row -->
    </div>
    <div class="empty-space col-md-b100 col-xs-b70"></div>
</section>
<!-- End Pricing Section -->

<!-- Modals (Hidden by default) -->
<div id="labTechnicianModal" class="modal">
    <div class="modal-content text-002735">
        <span class="close">&times;</span>
        <h5 class="text-002735">Apply for Laboratory Technician</h5>
        <p>Please fill out the form to apply for the Laboratory Technician position.</p>
        <form>
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
</div>

<!-- Repeat modals for other positions in similar way -->
<!-- Add modals for "Research Scientist", "Clinical Lab Manager", and "Laboratory Assistant" here with similar structure. -->

<script>
    // Modal functionality
    document.querySelectorAll('.apply-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var modalId = this.getAttribute('data-target'); // Get the modal target id
            var modal = document.getElementById(modalId);
            modal.style.display = "block"; // Show the modal

            // Close the modal when clicking on the close button
            var closeButton = modal.querySelector('.close');
            closeButton.addEventListener('click', function() {
                modal.style.display = "none"; // Hide the modal
            });

            // Close the modal when clicking outside of the modal content
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = "none"; // Hide the modal if clicked outside
                }
            });
        });
    });
</script>

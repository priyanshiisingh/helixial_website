<!-- Start Pricing Section -->
<section id="price">
    <div class="empty-space col-md-b100 col-xs-b70"></div>
    <div class="tm-section-heading text-center">
        <h2>Join Us</h2>
        <div class="tm-section-seperator"><span></span></div>
        <div class="empty-space col-md-b60 col-xs-b40"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tm-pricing-carousel owl-carousel tm-nam-tm-style1 tm-dots1">
                    <div class="tm-price-list tm-gray-bg">
                        <div class="tm-price">
                            {{-- <h3>Laboratory Technician</h3> --}}
                        </div>
                        <h2 class="tm-pricing-heading">Laboratory Technician</h2>
                        <ul class="tm-test-list">
                            <li>Perform routine lab tests and experiments</li>
                            <li>Prepare and maintain lab equipment and materials</li>
                            <li>Ensure lab safety protocols are followed</li>
                            <li>Document test results and assist in research projects</li>
                            <li>Collaborate with research teams and senior scientists</li>
                        </ul>
                        <a href="#" class="tm-btn1 apply-btn" data-target="labTechnicianModal">APPLY NOW</a>
                    </div><!-- .tm-price-list -->

                    <div class="tm-price-list tm-gray-bg">
                        <div class="tm-price">
                            {{-- <h3>Research Scientist</h3> --}}
                        </div>
                        <h2 class="tm-pricing-heading">Research Scientist</h2>
                        <ul class="tm-test-list">
                            <li>Design and conduct scientific research projects</li>
                            <li>Analyze experimental data and interpret findings</li>
                            <li>Publish research papers and contribute to academic journals</li>
                            <li>Collaborate with multidisciplinary teams</li>
                            <li>Maintain up-to-date knowledge of scientific advancements</li>
                        </ul>
                        <a href="#" class="tm-btn1 apply-btn" data-target="researchScientistModal">APPLY NOW</a>
                    </div><!-- .tm-price-list -->

                    <div class="tm-price-list tm-gray-bg">
                        <div class="tm-price">
                            {{-- <h3>Clinical Laboratory Manager</h3> --}}
                        </div>
                        <h2 class="tm-pricing-heading">Clinical Laboratory Manager</h2>
                        <ul class="tm-test-list">
                            <li>Oversee daily lab operations and staff management</li>
                            <li>Ensure compliance with regulatory standards and quality control</li>
                            <li>Monitor equipment maintenance and inventory management</li>
                            <li>Develop and implement laboratory procedures</li>
                            <li>Prepare reports and liaise with medical professionals</li>
                        </ul>
                        <a href="#" class="tm-btn1 apply-btn" data-target="clinicalLabManagerModal">APPLY NOW</a>
                    </div><!-- .tm-price-list -->

                    <div class="tm-price-list tm-gray-bg">
                        <div class="tm-price">
                            {{-- <h3>Laboratory Assistant</h3> --}}
                        </div>
                        <h2 class="tm-pricing-heading">Laboratory Assistant</h2>
                        <ul class="tm-test-list">
                            <li>Assist laboratory technicians and researchers</li>
                            <li>Prepare samples and reagents for analysis</li>
                            <li>Ensure lab is organized and equipment is properly maintained</li>
                            <li>Handle and dispose of hazardous materials safely</li>
                            <li>Assist in inventory management and ordering supplies</li>
                        </ul>
                        <a href="#" class="tm-btn1 apply-btn" data-target="labAssistantModal">APPLY NOW</a>
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
  <div class="modal-content">
    <span class="close">&times;</span>
    <h5>Apply for Laboratory Technician</h5>
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

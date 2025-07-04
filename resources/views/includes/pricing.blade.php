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

                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if (!$careers->isEmpty())

                    <div class="tm-pricing-carousel owl-carousel tm-nam-tm-style1 tm-dots1">
                        @foreach ($careers as $career)
                            <div class="tm-price-list tm-gray-bg">
                                <div class="tm-price">
                                    {{-- <h3>Laboratory Technician</h3> --}}
                                </div>
                                <h2 class="tm-pricing-heading text-002735">{{ $career->title }}</h2>
                                {{ $career->description }}
                                <a href="#" class="tm-btn2 apply-btn" data-title="{{ $career->title }}"
                                    data-description="{{ strip_tags($career->description) }}">
                                    APPLY NOW
                                </a>
                            </div><!-- .tm-price-list -->
                        @endforeach
                    </div>
                @else
                    <div>
                        No results
                    </div>
                @endif
            </div><!-- .col -->
        </div><!-- .row -->
    </div>
    <div class="empty-space col-md-b100 col-xs-b70"></div>
</section>
<!-- End Pricing Section -->

<!-- Modals (Hidden by default) -->
<!-- Dynamic Modal -->
<div id="careerModal" class="modal" style="display:none;">
    <div class="modal-content text-002735">
        <span class="close">&times;</span>
        <h5 class="text-002735" id="modalTitle"></h5>
        <p id="modalDescription"></p>
        <form action="{{ route('career.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="job_title" id="jobTitleInput">

            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
</div>


<!-- Repeat modals for other positions in similar way -->
<!-- Add modals for "Research Scientist", "Clinical Lab Manager", and "Laboratory Assistant" here with similar structure. -->

<script>
    const modal = document.getElementById("careerModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalDescription = document.getElementById("modalDescription");
    const jobTitleInput = document.getElementById("jobTitleInput");
    const closeModal = modal.querySelector(".close");

    document.querySelectorAll(".apply-btn").forEach(button => {
        button.addEventListener("click", function(e) {
            e.preventDefault();

            const title = this.getAttribute("data-title");
            const description = this.getAttribute("data-description");

            modalTitle.textContent = "Apply for " + title;
            modalDescription.textContent = "Please fill out the form to apply for the " + title +
                " position.";

            jobTitleInput.value = title;

            modal.style.display = "block";
        });
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
</script>

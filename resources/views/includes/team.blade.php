    <!-- Start Team Member -->
    <section id="doctor">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if (!$members->isEmpty())
                        <div class="tm-member-carousel owl-carousel tm-nam-tm-style1  tm-dots1">

                            @foreach ($members as $member)
                                @php
                                    $image = $member->attachments->first(); // Get the first attached image
                                @endphp
                                <div class="tm-team-member">
                                    <div class="tm-member-hover">
                                        <a href="#" class="tm-member-thumb">
                                            <img src="{{ $image != null ? asset($image->url()) : '' }}" alt="">
                                        </a>
                                    </div>
                                    <div class="tm-member-meta text-center">
                                        <h3 class="tm-member-name"><a href="#">{{ $member->name }}</a></h3>
                                        <span class="tm-member-speciality">{!! $member->description !!}</span>
                                    </div>
                                </div><!-- .tm-team-member -->
                            @endforeach

                        </div><!-- .member-carousel -->
                    @else
                        <div>
                            No results
                        </div>
                    @endif
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Team Member -->

    <!-- Start Appointment Section -->
    <section class="tm-relative" id="appointment">
        <div class="tm-half-section-bg right">
            <img src="assets/img/appointment-bg.jpg" alt="about hafl bg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 tm-hf-hide">
                    <div class="empty-space col-md-b0 col-xs-b70"></div>
                    <div class="tm-appointment-heading tm-gray-bg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="tm-section-heading text-center">
                            <h2>MAKE AN APPOINTMENT</h2>
                            <div class="tm-section-seperator"><span></span></div>
                            <p>If you wont to make an appointment with any specialist just fill up the form with valid data and we will contact you via phone for confirmation.</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-5">
                    <div class="empty-space col-md-b60 col-xs-b40"></div>
                    <form method="POST" action="https://thememarch.com/demo/html/trustlife/trustlife/assets/php/appointment.php" class="tm-appointment-form" id="appointment-form">
                        <div id="tm-alert1"></div>
                        <div class="tm-form-field">
                            <input type="text" id="uname" name="uname" placeholder="Full Name" required>
                            <span class="bar"></span>
                        </div>
                        <div class="tm-form-field">
                            <input type="text" id="uemail" name="uemail" placeholder="Email Address" required>
                            <span class="bar"></span>
                        </div>
                        <div class="tm-form-field">
                            <input type="text" id="unumber" name="unumber" placeholder="Phone Number" required>
                            <span class="bar"></span>
                        </div>
                        <div class="tm-form-field">
                            <input name="udate" type="text" id="udate" placeholder="Booking Date">
                            <span class="bar"></span>
                            <div class="date-icon"><i class="fa fa-calendar"></i></div>
                        </div>
                        <div class="tm-form-field">
                            <div class="tm-custom-select-wrap">
                                <select name="udepartment" class="tm-custom-select" id="udepartment">
                                    <option value="department">Department</option>
                                    <option value="dental-care">Dental Care</option>
                                    <option value="neurology">Neurology</option>
                                    <option value="crutches">Crutches</option>
                                    <option value="cardiology">Cardiology</option>
                                    <option value="pulmonary">Pulmonary</option>
                                    <option value="x-ray">X-Ray</option>
                                </select>
                            </div>
                        </div>
                        <div class="tm-form-field">
                            <div class="tm-custom-select-wrap">
                                <select name="udoctor" class="tm-custom-select" id="udoctor">
                                    <option value="doctor">Doctor</option>
                                    <option value="jhon-doe">Dr. Jhon Doe</option>
                                    <option value="mak-rushi">Dr. Mak Roshi</option>
                                    <option value="mohoshin-kabir">Dr. Mohoshin Kabir</option>
                                    <option value="nayon-borua">Dr. Nayon Borua</option>
                                    <option value="rasel-islam">Dr. Rasel Islam</option>
                                    <option value="mahid-islam">Dr. Mahid Islam</option>
                                </select>
                            </div>
                        </div>
                        <div class="tm-form-field">
                            <textarea cols="30" rows="10" id="umsg" name="umsg" placeholder="Your Message"></textarea>
                            <span class="bar"></span>
                        </div>
                        <div class="empty-space col-xs-b10"></div>
                        <div class="tm-form-field">
                            <button class="tm-btn1 tm-reverse" type="submit" id="appointment-submit" name="submit">BOOK APPOINTMENT</button>
                        </div>
                    </form>
                    <div class="empty-space col-md-b60 col-xs-b70"></div>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

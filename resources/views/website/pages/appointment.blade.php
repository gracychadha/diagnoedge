@extends("website.layout.master-layout")
@section("title", " Appointment | Diagnoedge")
@section("content")
      <!-- main start -->
            <main class="main">
                <!-- breadcrumb section start -->
                <section class="breadcrumb-section" data-img-src="assets/images/breadcrumb/breadcrumb.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- breadcrumb content start -->
                                <div class="breadcrumb-content">
                                    <!-- breadcrumb title start -->
                                    <div class="breadcrumb-title wow fadeInUp" data-wow-delay=".2s">
                                        <h1>Appointment</h1>
                                    </div>
                                    <!-- breadcrumb title end -->
                                    <!-- nav start -->
                                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                        </ol>
                                    </nav>
                                    <!-- nav end -->
                                </div>
                                <!-- breadcrumb content end -->
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-shape">
                        <img class="breadcrumb-shape-one" src="assets/images/shape/shape-4.png" alt="breadcrumb shape one">
                        <img class="breadcrumb-shape-two" src="assets/images/shape/square-blue.png" alt="breadcrumb shape two">
                        <img class="breadcrumb-shape-three" src="assets/images/shape/plus-orange.png" alt="breadcrumb shape three">
                    </div>
                </section>
                <!-- breadcrumb section end -->

                <!-- appointment section start -->
                <section class="appointment-section-4 pt-100 md-pt-80 pb-100 md-pb-80">
                    <div class="container">
                        <div class="row flex-lg-row-reverse justify-content-between align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="appointment-content wow fadeInLeft" data-wow-delay=".2s">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- section title start -->
                                            <div class="section-title">
                                                <span class="sub-title">Appointment</span>
                                                <h2>Book An Appointment</h2>
                                            </div>
                                            <!-- section title end -->
                                        </div>
                                    </div>
                                    <!-- default form start -->
                                    <div class="default-form appointment-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-floating field-inner">
                                                            <input class="form-control" id="fullname" name="fullname" placeholder="Full Name Here" type="text" autocomplete="off" required="required">
                                                            <label for="fullname">Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-floating field-inner">
                                                            <input class="form-control" id="email" name="email" placeholder="Email Here" type="email" autocomplete="off" required="required">
                                                            <label for="email">Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-floating field-inner">
                                                            <input class="form-control" id="phone" name="phone" placeholder="Phone Number Here" type="text" autocomplete="off" required="required">
                                                            <label for="phone">Phone Number</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12"> 
                                                    <div class="form-group">
                                                        <div class="form-floating">
                                                            <select class="form-select" id="choosedoctor" aria-label="Choose Doctor">
                                                                <option selected="selected">Choose Doctor</option>
                                                                <option value="Dr. Catherine Denuve">Dr. Catherine Denuve</option>
                                                                <option value="Dr. Laurence Olivier">Dr. Laurence Olivier</option>
                                                                <option value="Dr. Susan Hopkins">Dr. Susan Hopkins</option>
                                                            </select>
                                                            <label for="choosedoctor">Choose Doctor</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12"> 
                                                    <div class="form-group">
                                                        <div class="form-floating">
                                                            <select class="form-select" id="selectdepartment" aria-label="Select Department"> 
                                                                <option selected="selected">Select Department </option>
                                                                <option value="General Medicine">General Medicine</option>
                                                                <option value="Heart Specialists">Heart Specialists</option>
                                                                <option value="Skin &amp; Hair Specialists">Skin &amp; Hair Specialists</option>
                                                                <option value="Child Specialists">Child Specialists</option>
                                                            </select>
                                                            <label for="selectdepartment">Select Department </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-floating field-inner">
                                                            <input class="form-control" id="appointmentdate" name="appointmentdate" type="date" autocomplete="off" required="required">
                                                            <label for="appointmentdate">Appointment Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-floating field-inner">
                                                            <input class="form-control" id="appointmenttime" name="appointmenttime" type="time" autocomplete="off" required="required">
                                                            <label for="appointmenttime">Appointment Time</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-floating field-inner">
                                                            <textarea id="message" class="form-control" name="message" placeholder="Messege Here" autocomplete="off" required="required"></textarea>
                                                            <label for="message">Message</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="appointment-btn-wapper">
                                                        <button type="submit" class="theme-button style-1" data-text="Book Appointment">
                                                            <span data-text="Book Appointment">Book Appointment</span>
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- default form end -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!-- appointment image start -->
                                <div class="appointment-image wow fadeInRight" data-wow-delay=".2s">
                                    <div class="shape-1"><img src="assets/images/shape/shape-1.png" alt="shape"></div>
                                    <div class="img1">
                                        <figure>
                                            <img class="appointment-large" src="assets/images/appointment/appointment-4-1.jpg" alt="appointment large">
                                        </figure>
                                    </div>
                                    <div class="img2">
                                        <figure>
                                            <img class="appointment-small" src="assets/images/appointment/appointment-4-2.jpg" alt="appointment small">
                                        </figure>
                                    </div>
                                </div>
                                <!-- appointment image end -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- appointment section end -->

                <!-- cta section start -->
                <section class="cta-section-3 pb-100 md-pb-80">
                    <div class="container">
                        <div class="cta-wapper" data-img-src="assets/images/cta/background-cta-shape.png">
                            <div class="row align-items-end justify-content-between">
                                <div class="col-lg-5">
                                    <div class="cta-content">
                                        <!-- section title start -->
                                        <div class="section-title">
                                            <h2>Subscribe &amp; Join With Us Now !</h2>
                                            <p>Get free suggestion for carenix for the future</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- cta form start -->
                                    <div class="cta-form">
                                        <div class="cta-shape"><img src="assets/images/cta/cta-shape-1.png" alt="cta image"></div>
                                        <!-- form start -->
                                        <form action="#">
                                            <div class="form-group mb-0">
                                                <div class="form-floating field-inner">
                                                    <input id="subscribe" name="subscribe" class="form-control white-field" placeholder="Enter Address" type="text" autocomplete="off">
                                                    <label for="subscribe">Enter Address </label>
                                                    <button type="submit" class="theme-button style-3" aria-label="subscribe" data-text="Subscribe Now" >
                                                        <span data-text="Subscribe Now">Subscribe Now</span>
                                                        <i class="fa-solid fa-paper-plane"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- form end -->
                                    </div>
                                    <!-- cta form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- cta section end -->
            </main>
            <!-- main end -->

@endsection
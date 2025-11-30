<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a href="{{ route('admin-appointment.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-menu"></i>
                    <span class="nav-text">Appointment</span>
                </a>
            </li>
            <li><a href="{{ route('admin-contact.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-list"></i>
                    <span class="nav-text">Contact Leads</span>
                </a>
            </li>

            {{-- for health package --}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-folder-1"></i>
                    <span class="nav-text">Health Package</span>
                </a>
                <ul aria-expanded="false">
                    {{-- <li><a href="" aria-expanded="false"> Package</a> --}}
                    <li><a href="{{ route('admin.pages.test') }}"> Test Details</a></li>
                    <li><a href="{{ route('admin.pages.parameter') }}">Parameter</a></li>
                    <li><a href="{{ route('health-risks.index') }}">Health Risk</a></li>
                    {{-- <li><a href="{{ route('packages.index') }}">Packages</a></li> --}}
                    <li><a href="{{ route('admin-subparameters.index') }}">Sub Parameter/Health Package</a></li>

                    <li><a href="{{ route('faqspackages.index') }}">Faqs</a></li>



                </ul>
            </li>
            {{-- Cms --}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">Blogs</a>
                        <ul class="" aria-expanded="false">
                            <li><a href="{{ route('blog-categories.index') }}">Blog category</a></li>
                            <li><a href="{{ route('blogs.index') }}">Blog Details</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Home Page</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('sliderimage.index') }}">Slider</a></li>
                            <li><a href="{{ route('about-section.index') }}">About Us</a></li>
                            <li><a href="{{ route('whychooseus.section') }}">Why Choose Us</a></li>
                            <li><a href="{{ route('accreditations.index') }}">Accreditations</a></li>
                            <li><a href="{{ route('gallery.index') }}">Gallery</a></li>
                            <li><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
                            <li><a href="{{ route('faqs.index') }}">Faqs</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">About Us Page</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('about-section-two.index') }}">Know Us Better</a></li>
                            <li><a href="{{ route('counters.index') }}">Counter</a></li>
                            <li><a href="#">What Makes Us Different</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Partner Page</a>
                        <ul aria-expanded="false">
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="{{ route('partners.index') }}">Partner Image</a></li>
                        </ul>
                    </li>
                    <li><a class="" href="{{ route('site-images.index') }}" aria-expanded="false">Ads & Popup</a>

                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Job Career</a>
                        <ul aria-expanded="false">

                            <li><a href="{{ route('jobcareer.index') }}">Add Vacency</a></li>

                        </ul>
                    </li>

                </ul>
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Management</span>
                </a>

                <ul aria-expanded="false">
                    <li><a href="{{ route('profile.index') }}">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>

                </ul>
            </li> --}}

            <li><a href="{{ route('profile') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-user-circle"></i>
                    <span class="nav-text">My Profile</span>
                </a>
            </li>



            <li><a href="javascript:void(0)" class="has-arrow ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('general-setting') }}">General Settings</a></li>
                    <li><a href="{{ route('system-setting') }}">System Setting</a></li>
                    <li><a href="{{ route('theme-setting') }}">Theme Settings</a></li>
                    <li><a href="{{ route('website-setting') }}">Website Settings</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
                    <i class="flaticon-381-id-card-4"></i>
                    <span class="nav-text">Staff</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin-doctors.index') }}">Doctor</a></li>
                    {{-- <li><a href="{{ route('admin-staff') }}">Staff</a></li> --}}

                    {{-- <li><a href="staff-profile.html">Staff Profie</a></li> --}}
                </ul>
            </li>


        </ul>


    </div>
</div>
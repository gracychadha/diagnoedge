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
            <li><a href="{{ route('admin-booking.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-menu"></i>
                    <span class="nav-text">Booking Leads</span>
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
                    <li><a class="" href="{{ route('site-images.index') }}" aria-expanded="false">Ads & Popup</a>

                    </li>
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
                            <li><a href="{{ route('admin-about-makes.index') }}">What Makes Us Different</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Partner Page</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin-partner-about.index') }}">Our Partners</a></li>
                            <li><a href="{{ route('partners.index') }}">Partner Image</a></li>
                            <li><a href="{{ route('admin-why-partner.index') }}">Why Partners</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Corporate Page</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin-corporate.index') }}">Benefits</a></li>
                            <li><a href="{{ route('admin-corporate-service.index') }}">Services</a></li>

                        </ul>
                    </li>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Job Career</a>
                        <ul aria-expanded="false">

                            <li><a href="{{ route('jobcareer.index') }}">Add Vacancy</a></li>

                        </ul>
                    </li>
                    <li><a class="" href="{{ route('admin-privacy-policy.index') }}" aria-expanded="false">Privacy
                            Policy</a>

                    </li>
                    <li><a class="" href="{{ route('admin-terms-condition.index') }}" aria-expanded="false">Terms
                            Conditions</a>

                    </li>

                </ul>
            </li>
          
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
                    <li><a href="{{ route('seo-setting.index') }}">SEO Setting</a></li>
                    <li><a href="{{ route('website-setting') }}">Website Settings</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
                    <i class="flaticon-381-id-card-4"></i>
                    <span class="nav-text">Staff</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin-doctors.index') }}">Doctor</a></li>

                </ul>
            </li>
            <li><a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
                    <i class="flaticon-381-id-card-4"></i>
                    <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('register.index') }}">Add User</a></li>

                </ul>
            </li>
            <li>
                <div class="custom-btn-logout">
                    <a href="#" class="dropdown-item ai-icon"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-white" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <p class="p-3 text-center">
                Admin Panel Version <span class="text-theme">1.0.0</span> <br>
                 Last Updated: <span  class="text-theme">Dec 2025 </span>
            </p>


        </ul>


    </div>
</div>
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

            {{-- for health package --}}
             <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-folder-1"></i>
                    <span class="nav-text">Health Package</span>
                </a>
                <ul aria-expanded="false">
                    {{-- <li><a  href="" aria-expanded="false"> Package</a> --}}
                        
                        <li><a href="{{ route('packages.index') }}">Packages</a></li>
                        <li><a href="{{ route('admin-subparameter.index') }}">Sub Parameter</a></li>
                        <li><a href="{{ route('admin.pages.parameter') }}">Child Parameter</a></li>
                        <li><a  href="{{ route('admin.pages.test') }}" aria-expanded="false"> Test Details</a>
                           
                        </li>
                
                </ul>
            </li>
            {{-- Cms --}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Blogs</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('blog-category') }}">Blog category</a></li>
                            <li><a href="{{ route('blog-description') }}">Blog Details</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ route('pages') }}">Pages</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Section</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('faq') }}">Faqs</a></li>
                            <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin-profile') }}">Profile</a></li>
                    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li> --}}

                </ul>
            </li>
            <li><a href="{{ route('admin-patient') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Patient</span>
                </a>
            </li>



            <li><a href="javascript:void(0)" class="has-arrow ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('general-setting') }}">General Settings</a></li>
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





            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Test</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('categories.index') }}">Test Category </a></li>
                    <li><a href="{{ route('test-description') }}">Test Description</a></li>
                    <li><a href="{{ route('services.index') }}">Test Services </a></li>

                </ul>
            </li> --}}


        </ul>


    </div>
</div>
<!-- popup call back Modal -->
<div class="modal fade" id="popupCallModal" tabindex="-1" aria-labelledby="popupCallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="popupCallModalLabel">Book a Home Visit Now !</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm" method="POST" action="{{ route('book.test') }}">
                    @csrf

                    <div class="form-group position-relative ">
                        <span class="popupicon"><i class="fa fa-user"></i></span>
                        <input class="form-control" style="padding-left: 45px;" type="text" id="name" name="name"
                            placeholder="Enter Name" required>
                    </div>

                    <div class="form-group position-relative ">
                        <span class="popupicon"><i class="fa fa-phone"></i></span>
                        <input class="form-control " style="padding-left :45px !important;" type="tel" id="phone"
                            name="mobile" placeholder="Enter Mobile No." required>
                    </div>


                    <input type="hidden" name="source" value="modal_homepage">

                    <div class="form-group ">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                            data-callback="recaptchaCallback"></div>
                    </div>
                    <button type="submit" id="bookingSubmit" class="w-100" disabled>
                        <a href="" class="theme-button style-1 w-100" aria-label="Submit">
                            <span data-text="Submit">Submit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </button>
                    {{-- <button type="submit" id="bookingSubmit" class="theme-button theme-button style-1 w-100"
                        disabled>Submit <i class="fa fa-paper-plane "></i></button> --}}
                </form>
            </div>
        </div>
    </div>
</div>
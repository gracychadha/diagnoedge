<!-- popup call back Modal -->
<div class="modal fade" id="popupCallModal" tabindex="-1" aria-labelledby="popupCallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="popupCallModalLabel">Book a Home Visit Now !</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="contact.php" method="POST" id="contact" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-floating field-inner">
                                    <input id="name" class="form-control" name="name" type="text" autocomplete="off"
                                        placeholder="Name Here" required="required">
                                    <label for="name">Name*</label>
                                    <span class="error" id="name-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-floating field-inner">
                                    <input id="phone" class="form-control" name="phone" type="text" autocomplete="off"
                                        placeholder="Phone Number Here" required="required">
                                    <label for="phone">Phone Number*</label>
                                    <span class="error" id="phone-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <a href="" class="theme-button style-1" aria-label="Submit">
                                <span data-text="Submit">Submit</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ajax-response"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="py-7 bg-gray-100 position-relative" id="contactSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h2>Contact Us</h2>
                <p class="font-weight-normal">Any questions or remarks? Just write us a messaage!</p>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-5 d-flex">
                            <div class="bg-gradient-dark mt-n5 mb-3 ms-lg-3 border-radius-md">
                                <div class="card-body p-5 position-relative">
                                    <h3 class="text-white">Contact Information</h3>
                                    <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back
                                        to you within 24 hours.</p>
                                    <div class="d-flex p-2 text-white">
                                        <i class="material-icons text-sm">call</i>
                                        <span class="text-sm opacity-8 ps-3">(+1) 512 938 9565</span>
                                    </div>
                                    <div class="d-flex p-2 text-white">
                                        <i class="material-icons text-sm">email</i>
                                        <span class="text-sm opacity-8 ps-3">info@psgmortgages.com</span>
                                    </div>
                                    <!-- <div class="d-flex p-2 text-white">
                                        <i class="material-icons text-sm">location_on</i>
                                        <span class="text-sm opacity-8 ps-3">12702 Sherborne St <br> Autsin, TX
                                            78729</span>
                                    </div> -->
                                    <div class="mt-4">
                                        <a href="https://www.facebook.com/profile.php?id=100078058894385&mibextid=ZbWKwL"
                                            target="__blank" type="button"
                                            class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                            data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Log in with Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                        <a type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                            data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Log in with Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form id="contact-form" onsubmit="return false" autocomplete="off">
                                <div class="card-body position-relative">
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-static mb-4">
                                                <label>First name</label>
                                                <input class="form-control" placeholder="eg. Lucas" required
                                                    aria-label="First Name..." type="text" name="firstName"
                                                    id="firstName">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-2">
                                            <div class="input-group input-group-static mb-4">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" required placeholder="eg. Jones"
                                                    aria-label="Last Name..." name="lastName" id="lastName">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-group input-group-static mb-4">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" required
                                                placeholder="eg. lucas@creative-tim.com" name="email" id="email">
                                        </div>
                                    </div>
                                    <label>What are you interested on?</label>
                                    <div class="d-flex">
                                        <div class="form-check me-3 my-auto">
                                            <input class="form-check-input" type="radio" name="interestedArea"
                                                id="flexRadioDefault1" value="Residential Loans" checked>
                                            <label class="form-check-label mb-0 ms-0" for="flexRadioDefault1">
                                                Residential Loans
                                            </label>
                                        </div>
                                        <div class="form-check me-3 my-auto">
                                            <input class="form-check-input" type="radio" name="interestedArea"
                                                id="flexRadioDefault2" value="Commercial Loans">
                                            <label class="form-check-label mb-0 ms-0" for="flexRadioDefault2">
                                                Commercial Loans
                                            </label>
                                        </div>
                                        <div class="form-check me-3 my-auto">
                                            <input class="form-check-input" type="radio" name="interestedArea"
                                                id="flexRadioDefault3" value="Hard Money Loans">
                                            <label class="form-check-label mb-0 ms-0" for="flexRadioDefault3">
                                                Hard Money Loans
                                            </label>
                                        </div>
                                        <div class="form-check my-auto">
                                            <input class="form-check-input" type="radio" name="interestedArea"
                                                id="flexRadioDefault4" value="Private Lending">
                                            <label class="form-check-label mb-0 ms-0" for="flexRadioDefault4">
                                                Private Lending
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-static mt-4">
                                        <label>Your message</label>
                                        <textarea name="message" class="form-control" id="message" rows="3"
                                            name="message"></textarea>
                                    </div>
                                    <span id="validationResult" class="py-1 text-center">
                                        
                                    </span>
                                    <div class="text-end mt-4">
                                        <button onclick="handleContactForm();" class="btn bg-gradient-dark mb-0">Send
                                            message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
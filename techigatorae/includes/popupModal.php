<div class="floatingFormWrapper">
    <button type="button" data-bs-target="#floatingFormModal" data-bs-toggle="modal">Get Free Estimation <i class="fa-solid fa-arrow-down"></i></button>
</div>


<div class="modal fade" id="floatingFormModal" data-bs-backdrop="penguin" data-bs-keyboard="false" tabindex="-1" aria-labelledby="floatingFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modalBg">
                <img src="<?php echo $actual_link . 'assets/images/popupBg.webp' ?>" class="img-fluid" data-src="<?php echo $actual_link; ?>assets/images/popupBg.webp" alt="popupBg" title="popupBg">
            </div>
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="modalTitle">
                            <strong>Idea</strong> Don’t Fly <span>WITHOUT <br>
                                EXECUTION!</span>
                        </div>
                        <p class="modalpara">We help entrepreneurs, start-ups & enterprises shape their <br>
                            ideas into products</p>

                        <div class="modal_divider-h"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                        <div class="modalForm">
                            <form class="form_submission" method="POST">
                                <!-- Custom Fields -->
                                <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                                <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                                <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                                <!--PPC parameters -->
                                <input type="hidden" name="keyword" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
                                <input type="hidden" name="matchtype" value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
                                <input type="hidden" name="msclkid" value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">
                                <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
                                <!--End PPC paramters-->

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <!-- <label class="mb-2" for="fname">first name <span>*</span></label> -->
                                            <i class="fas fa-user"></i>
                                            <input autocomplete="true" type="text" id="fname" name="name" placeholder="Enter Your Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <!-- <label class="mb-2" for="email">email <span>*</span></label> -->
                                            <i class="fas fa-envelope"></i>
                                            <input autocomplete="true" type="email" id="email" name="email" placeholder="Enter Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <!-- <label class="mb-2" for="phone">phone <span>*</span></label> -->
                                            <!-- <i class="fas fa-phone"></i> -->
                                            <input type="number" name="phone" minlength="9" maxlength="12" placeholder="Phone Number" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="submit-btn">Get In Touch </button>
                                    <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                    <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                    <div class="loader" style="display: none">
                                        <img src="<?php echo $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" alt="loader" title="loader" data-src="loader.gif">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                        <div class="modalContactInfo">
                            <div class="contactBox">
                                <div class="boxInner">
                                    <span>Email</span>
                                    <a id="email" href="<?php echo EMAIL_HREF ?>"><?php echo EMAIL ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal_divider-h"></div>
                        <div class="modalContactInfo">
                            <div class="contactBox">
                                <div class="boxInner">
                                    <span>Phone</span>
                                    <a id="telPhone" href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?> </a>
                                </div>
                            </div>
                        </div>
                        <div class="bigText">
                            techigator
                        </div>
                    </div>
                    <figure>
                        <img src="<?php echo $actual_link . 'assets/images/popupimg.webp' ?>" data-src="<?php echo $actual_link; ?>assets/images/popupimg.webp" alt="popupimg" title="popupimg" class="myLazy lazyload img-fluid w-100">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
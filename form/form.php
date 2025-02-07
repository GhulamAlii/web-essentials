<form class="form_submission" method="POST">
    <!-- Custom Fields -->
    <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
    <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
    <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
    <input type="hidden" name="price" data-name="price" value="">
    <input type="hidden" name="title" data-name="title" value="">

    <!--PPC parameters -->
    <input type="hidden" name="keyword" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : "---"; ?>">
    <input type="hidden" name="matchtype" value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : "---"; ?>">
    <input type="hidden" name="msclkid" value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : "---"; ?>">
    <input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : "---"; ?>">
    <!--End PPC paramters-->

    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label class="mb-2" for="fname">first name <span>*</span></label>
                <input autocomplete="true" type="text" id="fname" name="name" placeholder="john" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label class="mb-2" for="lname">last name <span>*</span></label>
                <input autocomplete="true" type="text" id="lname" name="lname" placeholder="doe" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label class="mb-2" for="email">email <span>*</span></label>
                <input autocomplete="true" type="email" id="email" name="email" placeholder="Johndoe@example.com" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label class="mb-2" for="phone">phone <span>*</span></label>
                <input type="number" id="phone" name="phone" minlength="9" maxlength="12" onkeypress="return /[0-9]/i.test(event.key)" pattern="[1-9]{1}[0-9]{9}" placeholder="000-000-000" required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label class="mb-2" for="message"> description <span>*</span></label>
                <textarea name="message" id="message" rows="10" placeholder="Write a message"></textarea>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="submit-btn">Submit <i class="fa-solid fa-circle-arrow-right"></i></button>
        <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
        <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
        <div class="loader" style="display: none">
            <img src="<?php echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" alt="loader" title="loader">
        </div>
    </div>
</form>

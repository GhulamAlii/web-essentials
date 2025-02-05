<?php
$robotMeta= 'index, follow';
$pageTitle = "Contact Us | Techigator Dubai, UAE";
$pageDescription = "Fill out the form below and get in touch with the experts who can handle the complexities of your software. From developing the most technical apps to delivering them with perfection – they can do it all.";
$canonicalURL = "https://www.techigator.ae" . $_SERVER['REQUEST_URI'];
include(__DIR__ . '/includes/header.php'); ?>

<!-- X==========X==========X==========X -->

<section class="contactBanner">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-7 mx-auto">
                <div class="bg_title">Contact Us</div>
                <h1 class="title mt-0">Get in touch</h1>
                <div class="bold_text">
                    If you'd like to get in touch with us, please use the contact form below.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '/includes/contactHome.php'); ?>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '/includes/footer.php'); ?>
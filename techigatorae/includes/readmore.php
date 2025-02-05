<section class="chall-sect">
    <img src="<?php echo $actual_link . 'loader.svg' ?>" data-src="<?php echo $actual_link; ?>assets/images/services/chalElm.webp" class="img-fluid myLazy lazyload chalElm" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="case_studies_heading"><?php echo $readMoreHeading ?> </h2>
                <p>
                    <?php echo $shortContent ?>
                    <span id="dots" style="display: inline;">...</span>
                </p>
                <span id="more">
                    <?php echo $Content ?>
                </span>
                <div class="mobBtn">
                    <a href="javascript:;" onclick="myFunction()" id="myBtn" class="cta_btn cta_btn2">
                        Read More <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="divider2"></div>

    </div>
</section>
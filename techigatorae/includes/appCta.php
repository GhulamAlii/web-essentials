<section class="appCta">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-1 col-md-12">
                <div class="appCont">
                    <h3 class="case_studies_heading">
                        <?php echo $title; ?>
                    </h3>
                    <p>
                        <?php echo $desc; ?>
                    </p>
                    <div class="mobBtn">
                        <?php if (!empty($ctaBtnTextOne)): ?>
                            <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="cta_btn cta_btn2">
                                <!-- Share Your Idea -->
                                <?= $ctaBtnTextOne; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">

                <img src="<?php echo $actual_link . 'loader.svg' ?>" data-src="<?php echo $actual_link; ?>assets/images/<?php echo $cta_img; ?>.webp" class="img-fluid myLazy lazyload" alt="<?php echo $cta_imgAlt; ?>" title="<?php echo $cta_imgAlt; ?>">
            </div>
        </div>
    </div>
</section>
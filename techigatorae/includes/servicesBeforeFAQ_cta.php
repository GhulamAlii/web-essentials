<section class="our_cta">
    <div class="container-fulid p-0">
        <div class="cta_banner">
            <div class="section-heading our_hd">
                <marquee scrollamount="15" class="mobobile-none">
                    <h2><?php echo $CTA_MARQUEE; ?></h2>

                </marquee>
                <marquee scrollamount="4" class="desktop-none">
                    <h2><?php echo $CTA_MARQUEE; ?></h2>

                </marquee>
            </div>

            <div class="ourctaCont">
                <div class="appCont">
                    <h2 class="case_studies_heading">
                        <?php echo $CTA_TITLE; ?>
                    </h2>
                    <p>
                        <?php echo $CTA_desc; ?>
                    </p>

                    <div class="mobBtn">

                        <?php if (!empty($BtnText)): ?>
                            <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="cta_btn cta_btn2">
                                <!-- Build Your Cross-Platform App Today <i class="fa-solid fa-circle-arrow-right"></i> -->
                                <?= $BtnText; ?> <i class="fa-solid fa-circle-arrow-right"></i>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
            <img class="img-fluid newLoad" alt="<?= $alt; ?>" title="<?= $title; ?>" width="auto" height="auto" src="<?php echo $actual_link ?>assets/images/services/<?php echo $characterImagebg; ?>">

            <!-- catImg.webp -->
        </div>
    </div>
</section>
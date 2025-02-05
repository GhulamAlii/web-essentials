<section class="exper-sect">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="case_studies_heading"><?php echo $expertHeading; ?></h2>
                <p><?php echo $expertDesc; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="experCont">
                    <div class="expert-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($expertise as $index => $expertBox) : ?>
                                <div class="item swiper-slide">
                                    <div class="nativeCont">
                                        <div class="bigDigit">0<?php echo $index + 1 ?></div>
                                        <span></span>
                                        <h3><?php echo $expertBox['experttitle'] ?></h3>
                                        <p><?php echo $expertBox['expertdesc'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
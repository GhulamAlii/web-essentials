<section class="servSect">
    <img src="<?php echo $actual_link . 'loader.svg' ?>" data-src="<?php echo $actual_link . 'assets/images/services/' . $smElm; ?>" class="img-fluid myLazy lazyload smElm" alt="<?= $smElmalt ?>" title="<?= $smElmalt ?>">
    <!-- smElm.webp -->
    <img src="<?php echo $actual_link . 'loader.svg' ?>" data-src="<?php echo $actual_link . 'assets/images/services/' . $smElmTwo; ?>" class="img-fluid myLazy lazyload smElmTwo" alt="<?= $smElmTwoalt ?>" title="<?= $smElmTwoalt ?>">
    <!-- smElmTwo.webp -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="case_studies_heading">
                    <?php echo $title; ?>
                </h2>
                <p> <?php echo $desc; ?></p>
            </div>
        </div>
        <div class="serv_portfolio__slider_outer">
            <div class="serv_portfolio__slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($appServices as $index => $service) : ?>

                        <div class="swiper-slide serv_portfolio__single">
                            <div class="sertCont">
                                <img src="<?php echo $actual_link . 'loader.svg' ?>" data-src="<?php echo $actual_link . 'assets/images/services/sert.webp' ?>" class="img-fluid myLazy lazyload serTg" alt="service image" title="service image">
                                <h3>
                                    <?php echo $service['title'] ?>
                                </h3>
                                <p>
                                    <?php echo $service['desc'] ?>
                                </p>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
                <div class="d-flex justify-content-center mt-5 gap-3">
                    <button type='button' class='serv-swiper-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>
                    <button type='button' class='serv-swiper-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
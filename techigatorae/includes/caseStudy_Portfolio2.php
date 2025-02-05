<section class="case_studies">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="case_studies_heading">
                    <?php echo $potfolioHeading; ?>
                </h2>
            </div>
            <div class="col-lg-3 col-md-12" data-aos="slide-left" data-aos-duration="1000">
                <p class="mb-0">
                    <?php echo $potfolioDesc; ?>
                </p>
            </div>
            <div class="col-lg-2 col-md-12" data-aos="slide-left" data-aos-duration="1000">
                <div class="d-flex justify-content-end newStart">
                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="customBtn">view all</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12"></div>
            <div class="col-lg-7 col-md-12">
                <div class="bg_heading mt-5">
                    case study
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="caseStudy_slider-outerWrapper">
                    <div class="swiper casePortfolio_slidertwo" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <?php foreach ($casePortfolio as $index => $caseStudyPort): ?>
                                <div class="portSlider swiper-slide slideOne">
                                    <figure>
                                        <img src="<?php echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/<?php echo $caseStudyPort['img-src'] ?>.webp" alt="<?php echo $caseStudyPort['alt'] ?>" title="<?php echo $caseStudyPort['title'] ?>" class="<?php echo "class_" . $caseStudyPort['img-src'] ?> caseStudy_image myLazy lazyload img-fluid">
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
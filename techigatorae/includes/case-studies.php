<section class="case_studies">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="case_studies_heading">
                    <?php echo $caseStudiesHeading; ?>
                </h2>
            </div>
            <div class="col-lg-3 col-md-12" data-aos="slide-left" data-aos-duration="1000">
                <p class="mb-0">
                    <?php echo $caseStudiesDesc; ?>
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
                    <div class="swiper caseStudy_slider" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">

                            <?php
                            foreach ($caseStudies as  $index => $caseStudy) :
                            ?>
                                <div class="single_slide swiper-slide slide<?php echo $index ?>">
                                    <div class="row align-items-end">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="imageWrapper w-100 h-100 d-flex justify-content-center">
                                                <img src="<?php echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/caseStudyImage<?php echo $index ?>.webp" alt="<?= $caseStudy['AltText'] ?>" title="<?= $caseStudy['Title'] ?>" class="caseStudy_image myLazy lazyload">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <!-- <img src="<?php // echo $actual_link . 'loader.svg' 
                                                            ?>" height="auto" width="auto" data-src="<?php // echo $actual_link; 
                                                                                                        ?>assets/images/hamilton.webp" alt="caseStudy icon" title="caseStudy icon" class="mb-4 myLazy lazyload"> -->
                                            <h3 class="case_study_heading"><?php echo $caseStudy['heading'] ?></h3>
                                            <p class="sectonPara mb-4 text-white"><?php echo $caseStudy['content'] ?></p>
                                            <strong class="caseStudy_boldtext mb-4 d-inline-block">available on :</strong>
                                            <div class="counterBoxWrapper d-flex align-items-center gap-4 mb-4">
                                                <div class="counterBox">
                                                    <div class="counterdigits">
                                                        <?php echo $caseStudy['counterdigit1'] ?>
                                                    </div>
                                                    <div class="counterBox_heading">
                                                        <?php echo $caseStudy['counterBox_heading1'] ?>
                                                    </div>
                                                </div>
                                                <div class="counterBox">
                                                    <div class="counterdigits">
                                                        <?php echo $caseStudy['counterdigit2'] ?>
                                                    </div>
                                                    <div class="counterBox_heading">
                                                        <?php echo $caseStudy['counterBox_heading2'] ?>
                                                    </div>
                                                </div>
                                                <div class="counterBox">
                                                    <div class="counterdigits">
                                                        <?php echo $caseStudy['counterdigit3'] ?>
                                                    </div>
                                                    <div class="counterBox_heading">
                                                        <?php echo $caseStudy['counterBox_heading3'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="cta_btn">
                                                explore case study <i class="fa-solid fa-circle-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="100">
                <h2 class="case_studies_heading">
                    <?php echo $testimonialHeading; ?>
                </h2>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="100">
                <p class="mb-0">
                    <?php echo $testimonialDesc; ?>
                </p>
            </div>
            <div class="col-lg-2 col-md-12">
                <div class="d-flex justify-content-end newStart">
                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="customBtn text-capitalize">view all</a>
                </div>
            </div>
            <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                <div class="testimonialSlider swiper mt-5">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $index => $testimonial) : ?>
                            <div class="singleReview swiper-slide">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-6 col-sm-12">
                                        <img src="<?php echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/<?php echo $testimonial['qoute-Icon']; ?>" alt="quote" title="quote" class=" mb-4 img-fluid myLazy lazyload">
                                        <p class="testi_review mb-4"><?php echo $testimonial['description']; ?></p>
                                        <div class="testi_meta">
                                            <div class="testi_name">
                                                <?php echo $testimonial['testi-Name']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="imageWrapper w-100">
                                            <img src="<?php echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/<?php echo $testimonial['right-image']; ?>" alt="<?php echo $testimonial['AltText']; ?>" title="<?php echo $testimonial['Title']; ?>" class="img-fluid myLazy lazyload">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
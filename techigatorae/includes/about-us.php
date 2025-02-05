<section class="about_us" id="About">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="subheading2">
                    <?php echo $aboutHeading1; ?>
                </div>
                <h2 class="sectionTitle2 mb-5">
                    <?php echo $aboutHeading2; ?>
                </h2>
                <p class="sectonPara text-white"><?php echo $aboutContent ?></p>
                <a href="/about-us" class="textBtn"> <?php echo $btnText; ?> <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>

            <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                <img src="<?php echo $actual_link . 'loader.svg' ?>" height="705" width="890" data-src="<?php echo $actual_link; ?>assets/images/aboutus.webp" alt="software development company dubai" title="software development company dubai" class="img-fluid myLazy lazyload">
            </div>
        </div>
    </div>
</section>
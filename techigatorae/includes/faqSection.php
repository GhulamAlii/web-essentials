<section class="faq_section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-12 ">
                <div class="faqLeftCol">
                    <h2 class="faq_heading">
                        <?php echo $FAQ_title; ?>
                    </h2>
                    <div class="accordion mt-4 accordion-flush" id="customFaqs">
                        <?php foreach ($faqs as $index => $faq) : ?>
                            <div class="accordion-item">
                                <h3 class="accordion-header accordion-<?php echo $index; ?>" id="heading<?php echo $index; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index == 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                                        <?php echo $faq['question']; ?>
                                    </button>
                                </h3>
                                <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index == 0 ? 'show' : ''; ?>" data-bs-parent="#customFaqs" aria-labelledby="heading<?php echo $index; ?>">
                                    <div class="accordion-body">
                                        <?php echo $faq['answer']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="imgeGroup position-relative tgImg">
                    <img src="<?php echo $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/faq_right_image.webp" alt="<?php echo $altText ?>" title="<?php echo $Title ?>" class="img-fluid myLazy lazyload">
                    <img src="<?php echo $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/tg_logo.webp" alt="image" title="image" class="img-fluid myLazy lazyload">
                </div>
            </div>
        </div>
    </div>
</section>
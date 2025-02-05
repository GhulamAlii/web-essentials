<section class="mobappOne">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                <div class="mobCont">
                    <h2 class="sectionTitle mb-5">
                        <?php echo $title; ?>
                    </h2>
                    <p>
                        <?php echo $Desc; ?>
                    </p>
                    <?php if (!empty($listOptions)): ?>
                        <ul>
                            <?php foreach ($listOptions as $index => $list) : ?>
                                <li><i class="fa-solid fa-arrow-right-long"></i> <?php echo $list['list']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="mobBtn">
                        <!-- <a href="javascript:;" class="cta_btn cta_btn2">
                            Read More <i class="fa-solid fa-circle-arrow-right"></i>
                        </a> -->
                        <?php if (!empty($btnTextOne)): ?>
                            <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="cta_btn cta_btn2">
                                <!-- Let's Get Started -->
                                <?= $btnTextOne; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="mobFigure">
                    <figure>
                        <?php if (!empty($ImageOne)): ?>
                            <img src="<?php echo $actual_link . 'loader.svg' ?>" class="img-fluid w-100 myLazy lazyload" height="auto" width="auto" data-src="<?php echo $actual_link . 'assets/images/' . $ImageOne; ?>" title="<?= $ImageOneTitle ?>" alt="<?= $ImageOneAlt ?>" data-aos="fade-down" data-aos-duration="1000">
                        <?php endif; ?>
                        <?php if (!empty($ImageTwo)): ?>
                            <img src="<?php echo $actual_link . 'loader.svg' ?>" class="img-fluid w-100 myLazy lazyload" height="auto" width="auto" data-src="<?php echo $actual_link . 'assets/images/' . $ImageTwo; ?>" title="<?= $ImageTwoTitle ?>" alt="<?= $ImageTwoAlt ?>" data-aos="fade-up" data-aos-duration="1000">
                        <?php endif; ?>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
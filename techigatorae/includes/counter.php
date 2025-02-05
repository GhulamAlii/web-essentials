<section class="counter_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8 mx-auto">
                <h2 class="counterHeading"><?php echo $counterHeading ?></h2>
            </div>
            <div class="col-lg-7 col-md-8 mx-auto">
                <div class="counterWrapper d-flex justify-content-evenly">

                    <?php
                    $totalCounters = count($counters);
                    foreach ($counters as $index => $counter) : ?>
                        <div class="counterBox">
                            <div class="digits">
                                <?php echo $counter['dataCount'] ?>
                            </div>
                            <div class="heading">
                                <?php echo $counter['dataHeading'] ?>
                            </div>
                        </div>
                        <div class=" vLine <?php echo $index < $totalCounters - 1 ? 'd-block' : 'd-none'; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="particles position-absolute h-100 w-100 top-0 left-0">
        <img src="<?php echo $actual_link . 'loader.svg' ?>"  height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/Group1261153431.png" alt="tracker" title="tracker" class="img-fluid myLazy lazyload particle-1">
        <img src="<?php echo $actual_link . 'loader.svg' ?>"  height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/Group1261153429.svg" alt="revenue" title="revenue" class="img-fluid myLazy lazyload particle-2">
        <img src="<?php echo $actual_link . 'loader.svg' ?>"  height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/Group1261153432.svg" alt="performance" title="performance" class="img-fluid myLazy lazyload particle-3">
        <img src="<?php echo $actual_link . 'loader.svg' ?>"  height="auto" width="auto" data-src="<?php echo $actual_link; ?>assets/images/Group1261153430.svg" alt="sales" title="sales" class="img-fluid myLazy lazyload particle-4">
    </div>

</section>

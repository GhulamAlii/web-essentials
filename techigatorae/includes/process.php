<section class="process_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="case_studies_heading"><?php echo $PROCESS_HEADING; ?> </h2>
            </div>
            <div class="col-lg-5">
                <p><?php echo $PROCESS_DESC; ?> </p>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-8">
                <div class="processBGHeading">
                    Five-Step Process
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex align-items-start">
                    <div class="process_tabbBns w-100">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab"   aria-orientation="vertical">
                            <?php foreach ($processesTabs as $index => $processesTab) : ?>
                                <button class="nav-link <?php echo $index == 0 ? 'active' : ''; ?>" id="v-pills-tab<?php echo $index; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab<?php echo $index; ?>" type="button" aria-controls="v-pills-tab<?php echo $index; ?>" aria-selected="true">
                                    <div class="tabInner">
                                        <div class="tabLeft">
                                            <img src="<?php echo $actual_link . 'loader.svg' ?>" class="myLazy lazyload" width="auto" height="auto" data-src="<?php echo $actual_link; ?>assets/images/process/<?php echo $index + 1 ?>.svg" alt="image">
                                            <div class="title"><?php echo $processesTab['procesHeading']; ?></div>
                                        </div>
                                        <div class="tabRight">
                                            <div class="tabIndex">0<?php echo $index + 1 ?></div>
                                            <div class="rightIcon">
                                                <img src="<?php echo $actual_link . 'loader.svg' ?>" class="myLazy lazyload" width="auto" height="auto" data-src="<?php echo $actual_link; ?>assets/images/process/arrow_right.svg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="tab-content" id="v-pills-tabContent">

                    <?php foreach ($processes as $index => $process) : ?>
                        <div class="tab-pane fade <?php echo $index === 0 ? 'active show' : ''; ?>" id="v-pills-tab<?php echo $index; ?>" aria-labelledby="v-pills-tab<?php echo $index; ?>-tab" tabindex="0">
                            <div class="tabContentInner">
                                <h2 class="title"><?php echo $process['procesTitle']; ?></h2>
                                <p><?php echo $process['procesDesc']; ?></p>

                                <?php if (!empty($process['btnText'])): ?>
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="cta_btn">
                                        <!-- Get Started -->
                                        <?php echo $process['btnText']; ?> <i class="fa-solid fa-circle-arrow-right"></i>
                                    </a>
                                <?php endif; ?>

                                <div class="tabContentIconsWrapper">
                                    <div class="row">
                                        <?php foreach ($process['processesList'] as $list) : ?>
                                            <div class="processStepsBox">
                                                <div class="iconBox">
                                                    <div class="imgWrapper">
                                                        <img src="<?php echo $actual_link . 'loader.svg'; ?>" class="myLazy lazyload" width="auto" height="auto" data-src="<?php echo $actual_link . 'assets/images/process/' . $list['icon_image']; ?>" alt="<?php echo $list['icon_image']; ?>">
                                                    </div>
                                                    <div class="icon_heading">
                                                        <?php echo $list['icon_heading']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="bigDigit">
                                0<?php echo $index + 1; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</section>
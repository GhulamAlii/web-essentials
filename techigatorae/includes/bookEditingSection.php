<section class="book-editing-section" id="loadingsection" style="display: block;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <h2 class="case_studies_heading">
                    <?= $caseStudiesHeading; ?>
                </h2>
            </div>
            <div class="col-lg-3 col-md-4">
                <p class="mb-0">
                    <?= $caseStudiesDesc; ?>
                </p>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="d-flex justify-content-end newStart">
                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="customBtn">view all</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="align-items-center d-flex justify-content-between mb-3 nav nav-pills" id="pills-tab" role="tablist" aria-label="TabList">
                <?php foreach ($SolutionsTabs as $index => $SolutionsTab) : ?>

                        <button class="nav-link <?= $index == 0 ? 'active' : ''; ?>" id="pills-index<?= $index + 1 ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-index<?= $index + 1 ?>" type="button" aria-controls="pills-index<?= $index + 1 ?>" aria-selected="<?= $index == 0 ? 'true' : 'false'; ?>" tabindex="-1">
                            <span><?= $SolutionsTab['solHeading'] ?></span>
                            <figure>
                                <img src="<?= $actual_link . 'loader.svg' ?>" class="img-fluid myLazy lazyload" data-src="<?= $actual_link . 'assets/images/tab-icons/' . $index ?>.webp" alt="Action" title="Action">
                                <img src="<?= $actual_link . 'loader.svg' ?>" class="img-fluid myLazy lazyload" data-src="<?= $actual_link . 'assets/images/tab-icons/' . $index ?>a.webp" alt="Action" title="Action">
                            </figure>
                        </button>
                <?php endforeach; ?>

            </div>
            <div class="tab-content" id="pills-tabContent">
                <?php foreach ($Solutions as $index => $Solution) : ?>
                    <div class="fade section-title tab-pane <?= $index == 0 ? 'active show' : ''; ?>" id="pills-index<?= $index + 1 ?>"   aria-labelledby="pills-index<?= $index + 1 ?>-tab">
                        <div class="row align-items-center justify-content-between health-bg">
                            <div class="col-lg-6">
                                <div class="tabs-contents">
                                    <h3 class="banner-form-heading"><?= $Solution['solTitle'] ?></h3>
                                    <p><?= $Solution['solDesc'] ?></p>
                                    <div class="banner-btns btn-darks">
                                        <a href="<?= $actual_link . $Solution['Link'] ?>" class="customBtn2"> Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="<?= $actual_link . 'loader.svg' ?>" data-src="<?= $actual_link . 'assets/images/tab-icons/' . $index ?>b.webp" height="auto" width="auto" class="tabImg myLazy lazyload" alt="<?= $Solution['Alt']; ?>" title="<?= $Solution['Title']; ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
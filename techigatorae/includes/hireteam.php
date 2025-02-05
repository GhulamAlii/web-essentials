<section class="hire-member">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="hire_heading"><?= $hireTeam_title ?></h2>
                <p class="hire_para"><?= $hireTeam_description ?></p>
            </div>

            <?php foreach ($hireTeam as $index => $member) { ?>

                <div id="hire_member<?= $index ?>" class="col-lg-3 col-md-6 col-sm-12">
                    <div class="hire-box">
                        <div class="hirebox-header d-flex">
                            <img src="<?= $member['img_url'] ?>" alt="member">
                            <div class="hirebox-title_wrapper">
                                <h3 class="hirebox-title"><?= $member['name'] ?></h3>
                                <p class="hirebox-para"><?= $member['position'] ?></p>
                            </div>
                        </div>
                        <div class="hirebox-body w-100">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="hirebox-label">Years Of Experience</div>
                                    <div class="hirebox-value"><?= $member['experience'] ?></div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="hirebox-label">Availability</div>
                                    <div class="hirebox-value"><?= $member['availability'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="hirebox-footer w-100">
                            <div class="hirebox-label">Experts</div>

                            <div class="hirebox-badges">

                                <?php foreach ($member['expertise'] as $skill): ?>
                                    <div class="hirebox-badge"><?= $skill ?></div>
                                <?php endforeach; ?>

                            </div>

                            <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="hirebox-btn">
                                <?= $member['btnText'] ?>
                            </a>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>
</section>
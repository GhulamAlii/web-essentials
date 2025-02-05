<div class="h-screen">
    <section class="table_of_content animated-row section new-york-hire constructionpage_custom_faqs_section" id="hireobserverID">
        <div class="bg-white-heading-custom">
            <div class="container">
                <div class="row white-bg-heading-custom-row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title"><?= $TOC_Title; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav id="sidenavcustomnavccnav" class="sidenavcustomnavccnav">
                        <ul class="tableofContent">
                            <?php foreach ($tocSection_Questions as $index => $item) { ?>
                                <li>
                                    <a href="#section-<?= $index ?>" class="hire-tabs <?= $index === 0 ? 'current' : ''; ?>">
                                        <?= $item["Q"] ?>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>


                        <div class="custombottomsidebarbox">
                            <h3 class="sidenavcustomnavccnavhead">Share on:</h3>
                            <ul class="newyork-hiring-socialicons">
                                <li class="social-button" id="facebook-share">
                                    <a rel="nofollow" href="javascript:;">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-button" id="linkedin-share">
                                    <a rel="nofollow" href="javascript:;">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="social-button" id="whatsapp-share">
                                    <a rel="nofollow" href="javascript:;">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="social-button" id="twitter-share">
                                    <a rel="nofollow" href="javascript:;">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
                <div class="col-md-8">
                    <main>

                        <?php foreach ($tocSection_Content as $index => $item) { ?>
                            <section class="sec-info" id="section-<?= $index++ ?>">
                                <h2>
                                    <?= $item["Q"] ?>
                                </h2>
                                <ul>
                                    <?= $item["A"] ?>
                                </ul>
                            </section>
                        <?php }; ?>

                    </main>
                </div>
            </div>
        </div>
    </section>
</div>
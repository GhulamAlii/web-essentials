<section class="innerBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-6">
                <div class="bannerCont">
                    <?php
                    // Get the current URL parts
                    $default_link = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    $currentFile = basename($_SERVER['REQUEST_URI']);
                    $url_path = parse_url($default_link, PHP_URL_PATH);
                    $path_segments = array_filter(explode('/', trim($url_path, '/')));

                    $base_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . '/';

                    echo '<nav aria-label="breadcrumb">';
                    echo '<ol class="breadcrumb">';

                    echo '<li class="breadcrumb-item"><a href="' . $base_url . '">Home</a></li>';

                    // If there are no directories, add "Services" as a static text breadcrumb
                    if (count($path_segments) <= 1) {
                        echo '<li class="breadcrumb-item"><a href="' . $actual_link . 'services/">Services</a></li>';
                    }

                    // Loop through each part of the URL
                    $path_accumulator = $base_url;
                    foreach ($path_segments as $key => $segment) {
                        $path_accumulator .= $segment . '/';
                        $is_last = ($key === array_key_last($path_segments));

                        $segment_name = ucwords(str_replace('-', ' ', $segment));

                        if ($is_last) {
                            // Use the breadcrumbTitle or fallback to segment name
                            $breadcrumbTitle = isset($breadcrumbTitle) ? $breadcrumbTitle : $segment_name;
                            echo '<li class="breadcrumb-item active" aria-current="page">' . $breadcrumbTitle . '</li>';
                        } else {
                            echo '<li class="breadcrumb-item"><a href="' . $path_accumulator . '">' . $segment_name . '</a></li>';
                        }
                    }

                    echo '</ol>';
                    echo '</nav>';
                    ?>

                    <h1 class="title"><?php echo $bannerHeadingMain; ?></h1>
                    <div class="subtitle"><?php echo $bannerHeadingsub; ?></div>
                    <p><?php echo $bannerdesc; ?></p>

                    <div class="innerbtn">
                        <?php if (!empty($btnTextOne)): ?>
                            <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="customBtn">
                                <!-- Get in Touch -->
                                <?= $btnTextOne; ?>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($btnTextTwo)): ?>
                            <a href="/contact-us" class="customBtn">
                                <!-- View Portfolio -->
                                <?= $btnTextTwo; ?>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
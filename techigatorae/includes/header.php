<?php
include(__DIR__ . '/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="<?= $robotMeta; ?>">
    <?php if (!empty($keywordMeta)) { ?>
        <meta name="keywords" content="<?= $keywordMeta; ?>">
    <?php } ?>

    <!-- Standard favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $actual_link . 'assets/images/favicon.svg' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $actual_link . 'assets/images/favicon.svg' ?>">

    <link rel="shortcut icon" href="<?= $actual_link . 'assets/images/favicon.svg' ?>" type="image/x-icon">

    <title><?= $pageTitle; ?></title>

    <meta name="description" content="<?= $pageDescription; ?>">
    <link rel="canonical" href="<?= $canonicalURL; ?>">

    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/fonts.css?csdc' ?>">

    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/bootstrap5.min.css?csdc' ?>">
    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/swiper-bundle.min.css?=cdsc' ?>" />

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/css/intlTelInput.css?=cdsc"> -->

    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/font-awesome.min.css?csdc' ?>">
    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/plugin.min.css?csdc' ?>">


    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/custom.min.css?csdc' ?>">
    <link type="text/css" rel="stylesheet" href="<?= $actual_link . 'assets/css/responsive.min.css?csdc' ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $actual_link ?>" />
    <meta property="og:title" content="<?= $pageTitle; ?>" />
    <meta property="og:description" content="<?= $pageDescription; ?>" />
    <meta property="og:image" content="<?= $actual_link . 'assets/images/og-cover.webp' ?>" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?= $actual_link ?>" />
    <meta name="twitter:site" content="<?= $actual_link ?>" />
    <meta name="twitter:title" content="<?= $pageTitle; ?>" />
    <meta name="twitter:description" content="<?= $pageDescription; ?>" />
    <meta name="twitter:image" content="<?= $actual_link . 'assets/images/og-cover.webp' ?>" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WQQVX57C');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Begin Inspectlet Asynchronous Code -->
    <script type="text/javascript">
        (function() {
            window.__insp = window.__insp || [];
            __insp.push(['wid', 927937843]);
            var ldinsp = function() {
                if (typeof window.__inspld != "undefined") return;
                window.__inspld = 1;
                var insp = document.createElement('script');
                insp.type = 'text/javascript';
                insp.async = true;
                insp.id = "inspsync";
                insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=927937843&r=' + Math.floor(new Date().getTime() / 3600000);
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(insp, x);
            };
            setTimeout(ldinsp, 0);
        })();
    </script>
    <!-- End Inspectlet Asynchronous Code -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WPJZF6C8');
    </script>
    <!-- End Google Tag Manager -->

</head>

<?php
// Generate a unique class name
$pageId = basename($_SERVER['PHP_SELF'], ".php");
$uniqueClass = $pageId . '-' . 'page';
?>

<body class="<?= $uniqueClass; ?>">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQQVX57C" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPJZF6C8" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <div class="main-header site-header" id="site-header">
            <b class="screen-overlay"></b>
            <nav class="navbar2 navbar d-lg-none  navbar-expand-lg navbar-light">
                <a class="navbar-brand " href="<?= $actual_link; ?>">
                    <img height="auto" width="auto" src="<?= $actual_link; ?>assets/images/tglogo-m.webp" alt="techigator AE">
                </a>
                <div class=" headerBtn__wrapper d-flex gap-4 align-items-center ">
                    <a href="<?= PHONE_HREF ?>" class="telephoneIcon d-none" type="button">
                        <!-- <i class="fa-solid fa-phone-volume"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" x="0" y="0" enable-background="new 0 0 50 50" version="1.1" viewBox="0 0 50 50" xml:space="preserve">
                            <path d="M34.9 49.6c-.1 0-.2-.1-.3-.1-2-.2-3.9-.7-5.7-1.4-2.9-1.1-5.5-2.5-8.1-4.2-3.4-2.2-6.4-4.7-9.2-7.7-3.3-3.6-6.1-7.4-8.3-11.8-1.1-2.2-1.9-4.4-2.5-6.8-.4-1.7-.5-3.4-.2-5.1.2-1.4.8-2.7 1.8-3.8C3.7 7.4 5 6.2 6.2 4.9c.7-.7 1.5-1.2 2.4-1.4 1.1-.3 2.2-.2 3.3.3.6.3 1.1.7 1.6 1.2l5.4 5.4c.7.7 1.3 1.4 1.5 2.3.5 1.6.2 3.1-.9 4.3-1.1 1.2-2.3 2.3-3.4 3.5-.1.1-.3.2-.4.4.4.8.8 1.6 1.3 2.4 1.7 2.6 3.8 4.8 6.1 6.9 1.1 1 2.4 2 3.7 2.8.7.4 1.4.8 2 1.1.1-.1.3-.2.4-.4l2.8-2.8c.7-.7 1.6-1.4 2.6-1.6 1.4-.3 2.7 0 3.8.8.4.3.7.6 1 .9l5 5c.3.4.7.7 1 1.1 1.2 1.4 1.4 3.5.5 5.1-.3.6-.7 1.1-1.2 1.6-1 1.1-2.1 2.1-3.1 3.2-1.3 1.3-2.9 2.2-4.7 2.4-.1 0-.2.1-.3.1-.5.1-1.1.1-1.7.1zm.7-2.8c1.7 0 3-.5 4.1-1.6 1-1.1 2.1-2.1 3.1-3.2.2-.2.4-.5.6-.7.5-.7.4-1.4 0-2.1-.2-.3-.4-.5-.6-.7L37.3 33l-.4-.4c-.7-.6-1.5-.6-2.2-.1-.2.2-.5.4-.7.6l-3.4 3.4c-.8.8-1.7.9-2.6.4-2.3-1.1-4.3-2.5-6.2-4.1-1.9-1.7-3.7-3.5-5.3-5.5-1.3-1.6-2.5-3.4-3.3-5.3-.5-1.1-.3-2 .5-2.8l.3-.3c1-1 2-1.9 2.9-2.9.3-.3.5-.5.7-.8.4-.6.4-1.2 0-1.8-.2-.3-.4-.6-.7-.8-1.1-1.1-2.1-2.2-3.2-3.2l-2.3-2.3c-1-1-2-1-3-.1l-.1.1c-1.2.9-2.4 2.1-3.5 3.2-1 1-1.4 2.2-1.5 3.5-.1 1.5.2 2.9.6 4.3.9 2.9 2.1 5.6 3.7 8.2 1.6 2.6 3.4 5 5.5 7.3 1.9 2.2 4.1 4.1 6.4 5.9 2.4 1.8 4.9 3.4 7.6 4.7 1.4.7 2.8 1.3 4.2 1.7 1.4.5 2.9.8 4.3.9zM49.5 22.5c0 .1-.1.2-.1.3-.2.6-.7.9-1.3.9-.7 0-1.2-.4-1.3-.9-.2-.6-.3-1.2-.4-1.8-.5-2-1.2-3.9-2.2-5.7-1.1-2-2.4-3.8-4-5.4-1.4-1.4-3-2.7-4.8-3.7-1.9-1.1-3.9-2-6.1-2.5-.7-.2-1.3-.3-2-.4-.7-.2-1.1-.7-1.2-1.3 0-.9.7-1.6 1.6-1.5 1.4.3 2.8.6 4.2 1.1 1.7.6 3.3 1.3 4.9 2.3 1.4.8 2.7 1.8 3.9 2.8 1.4 1.2 2.6 2.5 3.7 4 1 1.3 1.9 2.7 2.6 4.2.9 1.7 1.5 3.6 2 5.5.2.6.3 1.3.4 1.9.1 0 .1.1.1.2zM27.4 9.4c.4.1.9.2 1.5.3 2.7.7 5.1 2.1 7.1 4.1 1.9 1.9 3.3 4.1 4.1 6.7.2.6.3 1.3.5 2 .1.7-.2 1.3-.8 1.6-.6.2-1.3 0-1.7-.5-.2-.3-.2-.6-.3-.8-.4-2.3-1.4-4.3-2.9-6-2-2.3-4.4-3.8-7.4-4.4-.2 0-.5-.1-.7-.2-.7-.2-1.1-.9-.9-1.6.1-.7.6-1.2 1.5-1.2z" class="st0"></path>
                        </svg>
                    </a>
                    <button data-trigger="#navbar_main" class="barIcon navbar-toggler d-none" type="button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </nav>

            <nav id="navbar_main" class="mobile-offcanvas navbar-expand-lg navbar-light">
                <div class="top-nav">
                    <div class="offcanvas-header">
                        <button class="navbar-toggler btn-close"><span class="cross">x</span></button>
                    </div>
                    <ul class="navbar-nav align-items-center">
                        <li>
                            <a class="navbar-brand" href="<?= $actual_link; ?>">
                                <img height="26" width="189" src="<?= $actual_link; ?>assets/images/logo.webp" alt="Logo" title="Logo" class="img-fluid">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $actual_link; ?>">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $actual_link ?>about-us">
                                About
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= $actual_link ?>services/">
                                Services
                            </a>
                            <div class="custom-mega-menu servives-menu">
                                <div class="inner-mega-menu">
                                    <div class="mega-menu-cta">
                                        <span class="mega-heading">services</span>
                                        <p>We work to develop outstanding digital solutions that offer smooth user experiences!</p>
                                        <div class="main-mega-info">
                                            <div class="icon-box">
                                                <img src="<?= $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" data-src="<?= $actual_link; ?>assets/images/phoneIcon.webp" alt="phone-icon" />
                                            </div>
                                            <div class="mega-info">
                                                <span>Give Us a Call</span>
                                                <a href="<?= PHONE_HREF ?>"><?= PHONE ?></a>
                                            </div>
                                        </div>
                                        <div class="main-mega-info">
                                            <div class="icon-box">
                                                <img src="<?= $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" data-src="<?= $actual_link; ?>assets/images/mailIcon.webp" alt="phone-icon" />
                                            </div>
                                            <div class="mega-info">
                                                <span>Let’s Discuss</span>
                                                <a href="<?= EMAIL_HREF ?>"><?= EMAIL ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mega-menu-list">
                                        <div class="menu-list-box custom-width">
                                            <span class="mega-heading">App Development Services</span>
                                            <ul>
                                                <li><a href="<?= $actual_link ?>mobile-app-development-company-dubai">Mobile App Development</a></li>
                                                <li><a href="<?= $actual_link ?>ios-app-development">iOS App Development</a></li>
                                                <li><a href="<?= $actual_link ?>android-app-development">Android App Development</a></li>
                                                <li><a href="<?= $actual_link ?>flutter-app-development">Flutter App Development</a></li>
                                                <li><a href="<?= $actual_link ?>react-native-app-development-dubai">React Native Development</a></li>
                                                <li><a href="<?= $actual_link ?>services/on-demand-app-development"> On-Demand App Development</a></li>
                                                <li><a href="<?= $actual_link ?>services/seo-company-dubai"> Seo Company Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>hire-app-developer">Hire App Developer</a></li>
                                            </ul>

                                            <span class="mega-heading">Game Development</span>
                                            <ul>
                                                <li><a href="<?= $actual_link ?>game-development-dubai">Game Development</a></li>
                                                <!-- <li><a href="<?= $actual_link ?>#">NFT Game Development</a></li>
                                                <li><a href="<?= $actual_link ?>#">Unreal Game Development</a></li>
                                                <li><a href="<?= $actual_link ?>#">Unity Game Development</a></li>
                                                <li><a href="<?= $actual_link ?>#">AR VR Game Development</a></li>
                                                <li><a href="<?= $actual_link ?>#">Character Design</a></li>
                                                <li><a href="<?= $actual_link ?>services/logo-design-dubai">Logo Design Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>services/ui-ux-design-dubai">UI/UX Design Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>services/branding-agency-dubai">Branding Agency Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>services/company-profile-design">Company Profile Design</a></li> -->
                                            </ul>
                                        </div>
                                        <div class="menu-list-box custom-width">
                                            <span class="mega-heading">Design & Development Services</span>
                                            <ul>
                                                <li><a href="<?= $actual_link ?>services/ui-ux-design-dubai">UI/UX Design</a></li>
                                                <li><a href="<?= $actual_link ?>services/logo-design-dubai">Logo Design</a></li>
                                                <li><a href="<?= $actual_link ?>services/branding-agency-dubai">Branding Agency</a></li>
                                                <li><a href="<?= $actual_link ?>services/company-profile-design">Company Profile Making</a></li>
                                                <li><a href="<?= $actual_link ?>services/web-design-company-dubai">Web Design Company Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>services/menu-design">Menu Design</a></li>
                                                <li><a href="<?= $actual_link ?>services/stationery-design">Stationery Design</a></li>
                                                <li><a href="<?= $actual_link ?>services/icon-designs">Icon Designs</a></li>
                                                <li><a href="<?= $actual_link ?>services/book-cover-designs">Book Cover Designs</a></li>
                                                <li><a href="<?= $actual_link ?>services/ppt-presentation-designs">PPT Presentation Designs</a></li>

                                            </ul>
                                        </div>
                                        <div class="menu-list-box custom-width">
                                            <!-- <span class="mega-heading">Design & Development Services</span> -->
                                            <ul>
                                                <li><a href="<?= $actual_link ?>services/brochure-design-dubai">Brochure Design Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>services/video-animation-company">Video Animation Company</a></li>
                                                <li><a href="<?= $actual_link ?>services/business-card-design">Business Card Design</a></li>
                                                <li><a href="<?= $actual_link ?>services/arabic-logo-maker">Arabic Logo Maker</a></li>
                                                <li><a href="<?= $actual_link ?>services/roll-up-banners-design">Rollup Desgin</a></li>
                                                <li><a href="<?= $actual_link ?>services/motion-graphic-designers">Motion Graphics</a></li>
                                                <li><a href="<?= $actual_link ?>services/lms-solutions">LMS Solutions</a></li>
                                                <li><a href="<?= $actual_link ?>shopify-development-company">Shopify Development Company</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list-box mega-img-box">
                                            <div class="img-box">
                                                <img src="<?= $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="368" width="483" data-src="<?= $actual_link; ?>assets/images/megamenuImage.webp" alt="mega-banner1" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= $actual_link ?>solutions/">
                                Industries
                            </a>
                            <div class="custom-mega-menu">
                                <div class="inner-mega-menu">
                                    <div class="mega-menu-cta">
                                        <span class="mega-heading">Solutions</span>
                                        <p>We work to develop outstanding digital solutions that offer smooth user experiences!</p>
                                        <div class="main-mega-info">
                                            <div class="icon-box">
                                                <img src="<?= $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" data-src="<?= $actual_link; ?>assets/images/phoneIcon.webp" alt="phone-icon" />
                                            </div>
                                            <div class="mega-info">
                                                <span>Give Us a Call</span>
                                                <a href="<?= PHONE_HREF ?>"><?= PHONE ?></a>
                                            </div>
                                        </div>
                                        <div class="main-mega-info">
                                            <div class="icon-box">
                                                <img src="<?= $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="auto" width="auto" data-src="<?= $actual_link; ?>assets/images/mailIcon.webp" alt="phone-icon" />
                                            </div>
                                            <div class="mega-info">
                                                <span>Let’s Discuss</span>
                                                <a href="<?= EMAIL_HREF ?>"><?= EMAIL ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mega-menu-list">
                                        <div class="menu-list-box custom-width">
                                            <span class="mega-heading">Industries</span>
                                            <ul class="doubleList">
                                                <li><a href="<?= $actual_link ?>solutions/healthcare-app-development-dubai">Healthcare App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/banking-app-development-dubai">Banking App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/fintech-app-development-dubai">FinTech App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/ecommerce-app-development-dubai">Ecommerce App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/logistics-app-development-dubai">Logistics App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/manufacturing-software-development-dubai">Manufacture App Development Dubai</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list-box custom-width">
                                            <!-- <span class="mega-heading">Industries</span> -->
                                            <ul class="doubleList">
                                                <li><a href="<?= $actual_link ?>solutions/tourism-app-development-dubai">Tourism App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/education-app-development-dubai">Education App Development Dubai</a></li>
                                                <li><a href="<?= $actual_link ?>solutions/real-estate-app-development-dubai">Real Estate App Development Dubai</a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-list-box mega-img-box">
                                            <div class="img-box">
                                                <img src="<?= $actual_link . 'loader.svg' ?>" class="myLazy lazyload" height="368" width="483" data-src="<?= $actual_link; ?>assets/images/megamenuImage2.webp" alt="mega-banner2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= $actual_link ?>#">
                                industries
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $actual_link ?>#">
                                Technologies
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $actual_link ?>blog/">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $actual_link ?>contact-us">
                                Contact us
                            </a>
                        </li>
                        <li>
                            <div class="numbrbtn">
                                <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="btn defult-btn header-button">Get started</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
<?php
$robotMeta = 'index, follow';
$pageTitle = "Techigator Design and Development Services";
$pageDescription = "Looking for a perfect digital transformation agency in Dubai? We have the best designers and developers in Dubai, UAE.";
$canonicalURL = "https://www.techigator.ae" . $_SERVER['REQUEST_URI'];
include(__DIR__ . '../../includes/header.php'); ?>

<!-- X==========X==========X==========X -->

<?php
$breadcrumbTitle = 'Services';
$bannerHeadingMain = 'Future-Ready Digital Services To Scale Your Business';
$bannerHeadingsub = 'Looking for a next-gen digital services company?';
$bannerdesc = 'Your search ends here with Techigator AE. We have you covered with a wide range of digital transformation services with the latest technologies and innovations at our disposal. Our user-centric digital products help you connect with your target audience on a deeper level, generate more business, and build a lasting impact on this emerging tech economy.';
$btnTextOne = 'Get in touch';
$btnTextTwo = 'View Portfolio';
include(__DIR__ . '../../includes/servicesBanner.php'); ?>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '../../includes/banner_cta.php'); ?>

<!-- X==========X==========X==========X -->

<section class="services_area">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="service__grid_title">Bring Ideas To Life With Our App Development Services!</h2>
         </div>
         <?php
         $services = [
            [
               'service_title' => 'Mobile App Development',
               'service_excerpt' => 'High-performing mobile applications that fit exactly with your business goals, engage the audience and boost ROI.',
               'service_link' => $actual_link . 'mobile-app-development-company-dubai',
            ],
            [
               'service_title' => 'iOS App Development',
               'service_excerpt' => 'Our Expert iOS app developers transform your ideas into reality, through future-ready iOS app development.',
               'service_link' => $actual_link . 'ios-app-development',
            ],
            [
               'service_title' => 'Android App Development',
               'service_excerpt' => 'Android applications cater to a vast range of devices and screen sizes, with seamless performance across the board.',
               'service_link' => $actual_link . 'android-app-development',
            ],
            [
               'service_title' => 'Flutter App Development',
               'service_excerpt' => 'Cost-effective solutions that work perfectly on both Android and iOS devices with a single codebase using Google’s cross-platform technology to build robust apps.',
               'service_link' => $actual_link . 'flutter-app-development',
            ],
            [
               'service_title' => 'React Native App Development',
               'service_excerpt' => 'We create applications not just for iOS and Android, our React Native development expertise helps you transform your vision into a full-fledged digital product that works perfectly on a wider range of devices.',
               'service_link' => $actual_link . 'react-native-app-development-dubai',
            ],
            [
               'service_title' => 'On-Demand App Development',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/on-demand-app-development',
            ],
            [
               'service_title' => 'Hire App Developer',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'hire-app-developer',
            ],
         ];

         foreach ($services as $index => $service) : ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
               <div class="service_box_wrapper serviceBox_<?= $index++ ?>">
                  <h3 class="service_title"><?= $service['service_title'] ?></h3>
                  <p class="service_excerpt"><?= $service['service_excerpt'] ?></p>
                  <a href="<?= $service['service_link'] ?>" class="service_btn">
                     <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="51" height="49" rx="7.5" fill="#FFEBDC" stroke="#FFDCC2" />
                        <path d="M18 24.6667H34M34 24.6667L27.3333 18M34 24.6667L27.3333 31.3333" stroke="#F47E26" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </a>
               </div>
            </div>
         <?php endforeach; ?>


         <div class="col-12">
            <h2 class="service__grid_title mt-5">Highly Creative Design & Development Services!</h2>
         </div>
         <?php
         $services = [
            [
               'service_title' => 'UI/UX Design',
               'service_excerpt' => 'Intuitive user interface and experience for a comprehensive user journey and enhanced brand persona.',
               'service_link' => $actual_link . 'services/ui-ux-design-dubai',
            ],
            [
               'service_title' => 'Logo Design',
               'service_excerpt' => 'We design bespoke logos that perfectly communicate your brand voice and have a lasting impact on your audience.',
               'service_link' => $actual_link . 'services/logo-design-dubai',
            ],
            [
               'service_title' => 'Branding Agency',
               'service_excerpt' => 'We design bespoke logos that perfectly communicate your brand voice and have a lasting impact on your audience.',
               'service_link' => $actual_link . 'services/branding-agency-dubai',
            ],
            [
               'service_title' => 'Company Profile Making',
               'service_excerpt' => 'We cover all the aspects of your business and put them into a captivating company profile design that represents the true potential of your company.',
               'service_link' => $actual_link . 'services/company-profile-design',
            ],
            [
               'service_title' => 'Web Design Company',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/web-design-company-dubai',
            ],
            [
               'service_title' => 'Menu Design',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/menu-design',
            ],
            [
               'service_title' => 'Stationery Design',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/stationery-design',
            ],
            [
               'service_title' => 'Brochure Design',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/brochure-design-dubai',
            ],
            [
               'service_title' => 'Video Animation Company',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/video-animation-company',
            ],
            [
               'service_title' => 'Business Card Design',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/business-card-design',
            ],
            [
               'service_title' => 'Arabic Logo Maker',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/arabic-logo-maker',
            ],
            [
               'service_title' => 'Seo Company',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/seo-company-dubai',
            ],
            [
               'service_title' => 'Rollup Desgin',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/rollup-desgin',
            ],
            [
               'service_title' => 'Motion Graphics',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/motion-graphics',
            ],
            [
               'service_title' => 'Icon Designs',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/icon-designs',
            ],
            [
               'service_title' => 'PPT Ppresentation Designs',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/ppt-presentation-designs',
            ],
            [
               'service_title' => 'Book Cover Designs',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/book-cover-designs',
            ],
            [
               'service_title' => 'LMS Solutions',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'services/lms-solutions',
            ],
            [
               'service_title' => 'Shopify Development Company',
               'service_excerpt' => '',
               'service_link' => $actual_link . 'shopify-development-company',
            ],
         ];

         foreach ($services as $index => $service) : ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
               <div class="service_box_wrapper serviceBox_<?= $index++ ?>">
                  <h3 class="service_title"><?= $service['service_title'] ?></h3>
                  <p class="service_excerpt"><?= $service['service_excerpt'] ?></p>
                  <a href="<?= $service['service_link'] ?>" class="service_btn">
                     <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="51" height="49" rx="7.5" fill="#FFEBDC" stroke="#FFDCC2" />
                        <path d="M18 24.6667H34M34 24.6667L27.3333 18M34 24.6667L27.3333 31.3333" stroke="#F47E26" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </a>
               </div>
            </div>
         <?php endforeach; ?>


         <div class="col-12">
            <h2 class="service__grid_title mt-5">Gamification Of Your Idea With The Latest Tech Advancements!</h2>
         </div>
         <?php
         $services = [
            [
               'service_title' => 'Game Development',
               'service_excerpt' => 'Highly engaging and interesting games that boost user retention and increase monetization opportunities.',
               'service_link' => $actual_link . 'game-development-dubai',
            ],
         ];

         foreach ($services as $index => $service) : ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
               <div class="service_box_wrapper serviceBox_<?= $index++ ?>">
                  <h3 class="service_title"><?= $service['service_title'] ?></h3>
                  <p class="service_excerpt"><?= $service['service_excerpt'] ?></p>
                  <a href="<?= $service['service_link'] ?>" class="service_btn">
                     <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="51" height="49" rx="7.5" fill="#FFEBDC" stroke="#FFDCC2" />
                        <path d="M18 24.6667H34M34 24.6667L27.3333 18M34 24.6667L27.3333 31.3333" stroke="#F47E26" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </a>
               </div>
            </div>
         <?php endforeach; ?>

      </div>
   </div>
</section>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '../../includes/contactHome.php'); ?>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '../../includes/footer.php'); ?>
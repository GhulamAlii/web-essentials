<?php
$robotMeta = 'index, follow';
$pageTitle = "Techigator Design and Development Solutions";
$pageDescription = " Looking for a perfect digital solution provider in Dubai? We have the best designers and developers in Dubai, UAE.";
$canonicalURL = "https://www.techigator.ae" . $_SERVER['REQUEST_URI'];
include(__DIR__ . '../../includes/header.php'); ?>

<!-- X==========X==========X==========X -->

<?php
$breadcrumbTitle = 'Solutions';
$bannerHeadingMain = 'Tech-Enabled Digital Solutions To Scale Your Business';
$bannerHeadingsub = 'Looking for a forward-looking digital solution provider?';
$bannerdesc = "Your search ends here with Techigator AE's diverse portfolio of proven solutions catering to different industries. We have a wide range of digital solutions with the latest technologies and innovations at our disposal. Our user-centric digital products help you connect with your target audience on a deeper level, generate more business, and build a lasting impact on this emerging tech economy.";
$btnTextOne = 'Get Consultation';
$btnTextTwo = 'View Portfolio';
include(__DIR__ . '../../includes/servicesBanner.php'); ?>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '../../includes/banner_cta.php'); ?>

<!-- X==========X==========X==========X -->

<section class="services_area new_class">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="service__grid_title">Bring Ideas To Life With Our App Development Services!</h2>
         </div>
         <?php
         $services = [
            [
               'service_title' => 'Healthcare',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/healthcare-app-development-dubai',
            ],
            [
               'service_title' => 'Banking',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/banking-app-development-dubai',
            ],
            [
               'service_title' => 'FinTech',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/fintech-app-development-dubai',
            ],
            [
               'service_title' => 'Ecommerce',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/ecommerce-app-development-dubai',
            ],
            [
               'service_title' => 'Logistics',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/logistics-app-development-dubai',
            ],
            [
               'service_title' => 'Manufacture',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/manufacturing-software-development-dubai',
            ],
            [
               'service_title' => 'Tourism',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/tourism-app-development-dubai',
            ],
            // [
            //    'service_title' => 'Insurance',
            //    'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
            //    'service_link' => $actual_link . 'solutions/insurance-app-development-dubai',
            // ],
            // [
            //    'service_title' => 'Lending',
            //    'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
            //    'service_link' => $actual_link . 'solutions/lending-app-development-dubai',
            // ],
            [
               'service_title' => 'Real Estate',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/real-estate-app-development-dubai',
            ],
            [
               'service_title' => 'Education',
               'service_excerpt' => 'HIPAA-compliant healthcare solutions that make healthcare more convenient and accessible to both patients and doctors.',
               'service_link' => $actual_link . 'solutions/education-app-development-dubai',
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
<?php
$robotMeta = 'index, follow';
$pageTitle = "Sitemap | Techigator Dubai, UAE";
$pageDescription = "";
$canonicalURL = "https://www.techigator.ae" . $_SERVER['REQUEST_URI'];
include(__DIR__ . '/includes/header.php'); ?>

<!-- X==========X==========X==========X -->

<section class="innerBanner_two">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-7 mx-auto">
				<div class="bg_title">Sitemap</div>
				<h1 class="title mt-0">Sitemap</h1>
			</div>
		</div>
	</div>
</section>

<!-- X==========X==========X==========X -->

<section class="pageContent">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php
				echo '<h3>' . WEBSITE_NAME . '</h3>';

				$pages = array(

					"Home" => "/",
					"About Us" => "/about-us",
					"Blog" => "/blog/",
					"Services" => "/services/",
					"Solutions" => "/solutions/",
					"Contact Us" => "/contact-us",
					"Privacy Policy" => "/privacy-policy",
					"Terms & Condition" => "/terms-and-condition",
				);

				echo "<ul class='sitemap_list'>";
				foreach ($pages as $page => $url) {
					echo "<li><a href='{$url}'>{$page}</a></li>";
				}
				echo "</ul>";
				?>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php
				echo '<h3> Game Development </h3>';

				$pages = array(

					"Game Development" => "/game-development-dubai",
				);

				echo "<ul class='sitemap_list'>";
				foreach ($pages as $page => $url) {
					echo "<li><a href='{$url}'>{$page}</a></li>";
				}
				echo "</ul>";
				?>

				<!-- X====X====X====X====X -->

				<?php
				echo '<h3> Mobile App Development Services </h3>';

				$pages = array(

					"Mobile App Development" => "/mobile-app-development-company-dubai",
					"iOS App Development" => "/ios-app-development",
					"Android App Development" => "/android-app-development",
					"Flutter App Development" => "/flutter-app-development",
					"React Native Development" => "/react-native-app-development-dubai",
					"On-Demand App Development" => "/services/on-demand-app-development"
				);

				echo "<ul class='sitemap_list'>";
				foreach ($pages as $page => $url) {
					echo "<li><a href='{$url}'>{$page}</a></li>";
				}
				echo "</ul>";
				?>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php
				echo '<h3> Design & Development Services </h3>';

				$pages = array(

					"UI/UX Design" => "/services/ui-ux-design-dubai",
					"Logo Design" => "/services/logo-design-dubai",
					"Branding Agency" => "/services/branding-agency-dubai",
					"Company Profile Making" => "/services/company-profile-design",
					"Web Design Company Dubai" => "/services/web-design-company-dubai",
					"Menu Design" => "/services/menu-design",
					"Stationery Design" => "/services/stationery-design",
					"Brochure Design Dubai" => "/services/brochure-design-dubai",
					"Video Animation Company" => "/services/video-animation-company",
					"Business Card Design" => "/services/business-card-design",
				);

				echo "<ul class='sitemap_list'>";
				foreach ($pages as $page => $url) {
					echo "<li><a href='{$url}'>{$page}</a></li>";
				}
				echo "</ul>";
				?>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php
				echo '<h3> Industries </h3>';

				$pages = array(

					"Healthcare App Development Dubai" => "/solutions/healthcare-app-development-dubai",
					"Banking App Development Dubai" => "/solutions/banking-app-development-dubai",
					"FinTech App Development Dubai" => "/solutions/fintech-app-development-dubai",
					"Ecommerce App Development Dubai" => "/solutions/ecommerce-app-development-dubai",
					"Logistics App Development Dubai" => "/solutions/logistics-app-development-dubai",
					"Manufacture App Development Dubai" => "/solutions/manufacturing-software-development-dubai",
					"Tourism App Development Dubai" => "/solutions/tourism-app-development-dubai",
					"Education App Development Dubai" => "/solutions/education-app-development-dubai",
					"Real Estate App Development Dubai" => "/solutions/real-estate-app-development-dubai",
				);

				echo "<ul class='sitemap_list'>";
				foreach ($pages as $page => $url) {
					echo "<li><a href='{$url}'>{$page}</a></li>";
				}
				echo "</ul>";
				?>
			</div>
		</div>
	</div>
</section>

<!-- X==========X==========X==========X -->

<?php include(__DIR__ . '/includes/footer.php'); ?>
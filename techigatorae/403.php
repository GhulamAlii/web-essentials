<?php
$robotMeta= 'index, follow';
$pageTitle = "403 Error | Forbidden | Techigator AE";
$pageDescription = "Forbidden";
$canonicalURL = "https://www.techigator.ae" . $_SERVER['REQUEST_URI'];
include(__DIR__ . '/includes/header.php'); ?>

<style>
	.error-page {
		margin-top: 100px;
		padding-block: 100px;
		color: #000;
		display: flex;
		justify-content: center;
		text-align: center;
	}

	.error-page h1 {
		color: #000;
		margin-bottom: 0px;
	}

	.error-page p {
		margin-bottom: 10px;
	}

	.error-page p span {
		font-weight: 800;
	}
</style>

<section class="error-page bg-white my-gap">
	<div class="container d-flex justify-content-center">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="flex-wrap">
					<!-- <img src="<?php // echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" data-src="<?php // echo $actual_link; ?>assets/images/imageOne.webp" alt="image" title="image" class="image_image myLazy lazyload"> -->

					<img class="img-fluid myLazy lazyload" src="<?php echo $actual_link . 'loader.svg' ?>" title="image" width="800" height="auto" data-src="<?php echo $actual_link . 'assets/images/errorimg403.webp' ?>" alt="403 Page not found - <?php echo WEBSITE_NAME ?>">

					<h1>Access Denied</h1>
					<p class="my-para">Sorry, you don't have permission to view this page. Please contact the site administrator for assistance.</p>
					<div class="d-flex justify-content-center">
						<a href="/" class="my-button customBtn mt-4">Go To Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include(__DIR__ . '/includes/footer.php'); ?>
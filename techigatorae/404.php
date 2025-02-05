<?php
$robotMeta= 'index, follow';
$pageTitle = "404 Error | Page Not Found | Techigator AE";
$pageDescription = "Page not found.";
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
			<div class="col-lg-7 mx-auto">
				<div class="flex-wrap">
					<!-- <img src="<?php // echo $actual_link . 'loader.svg' ?>" height="auto" width="auto" data-src="<?php // echo $actual_link; ?>assets/images/imageOne.webp" alt="image" title="image" class="image_image myLazy lazyload"> -->

					<img class="myLazy lazyload" src="<?php echo $actual_link . 'loader.svg' ?>" title="image" width="auto" height="auto" data-src="<?php echo $actual_link . 'assets/images/something-lost.png' ?>" style="height: 400px;" alt="404 Page not found - <?php echo WEBSITE_NAME ?>">

					<h1>I Think You've Lost</h1>
					<p class="my-para"><span>Oops!</span> It looks like you've taken a wrong turn. The page you're searching for seems to be lost in the digital wilderness. <span>Please double-check the URL</span> or use our site's navigation to find your way back. We're here to help you get back on track in no time. <br><i>Thanks for your understanding!</i></p>
					<div class="d-flex justify-content-center">
						<a href="/" class="my-button customBtn mt-4">Go To Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include(__DIR__ . '/includes/footer.php'); ?>
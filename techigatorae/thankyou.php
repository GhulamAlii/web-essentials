<?php
$robotMeta= 'index, follow';
$pageTitle = "Thank You | Techigator AE";
$pageDescription = "";
$canonicalURL = "https://www.techigator.ae" . $_SERVER['REQUEST_URI'];
include(__DIR__ . '/includes/header.php'); ?>

<style>
	.thank-page {
		margin-top: 100px;
		padding-block: 100px;
		color: #000;
		display: flex;
		justify-content: center;
		text-align: center;
	}

	.thank-page h1 {
		color: #000;
		margin-bottom: 0px;
		font-size: 7rem;
	}

	.thank-page .checkmarkIcon{
		font-size: 9rem;		
		color: var(--primary-color);
		line-height: 1;
		text-rendering: auto;
	}

	.thank-page p {
		margin-bottom: 10px;
	}

	.thank-page p span {
		font-weight: 800;
	}
</style>

<section class="thank-page bg-white my-gap">
	<div class="container d-flex justify-content-center">
		<div class="row">
			<div class="col-lg-7 mx-auto">
				<div class="flex-wrap">

					<!-- <img class="myLazy lazyload" src="<?php // echo $actual_link . 'loader.svg' 
															?>" title="image" width="auto" height="auto" data-src="<?php // echo $actual_link . 'assets/images/thankyou.webp' 
																													?>" style="height: 400px;" alt="Thank You - <?php // echo WEBSITE_NAME 
																																								?>"> -->

					<h1 class="thankyouText mt-4">THANK YOU!</h1>
					<i class="checkmarkIcon fa-solid fa-check"></i>
					<p class="my-para fs-4 my-4">Thank you for filling in your information. You have been successfully connected with us. We look forward to doing business with you. One of our account managers will get back to you shortly.</p>
					<p class="my-para fs-4">Feel free to get in touch with us at any time.</p>
					<div class="d-flex justify-content-center">
						<a href="/" class="my-button customBtn mt-4">Go To Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include(__DIR__ . '/includes/footer.php'); ?>
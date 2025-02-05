<div class="loader">
    <div class="loader-bg"></div>
    <div class="loader-curtain red"></div>
    <div class="loader-curtain red right"></div>
    <div class="loader-curtain navy"></div>
    <div class="loader-curtain navy right"></div>
    <div class="loader-logo-holder">
        <img src="<?php echo $actual_link . 'assets/images/techigatorDXB-white.gif' ?>" loading="eager" alt="loader-logo" class="loader-logo" width="auto" height="auto" />
        <!-- <img src="<?php // echo $actual_link . 'loader.svg' ?>"  data-src="<?php // echo $actual_link; ?>assets/images/techigatorDXB-white.gif" loading="eager" alt="loader-logo" class="loader-logo myLazy lazyload" width="auto" height="auto" /> -->
    </div>
</div>

<script>
    window.addEventListener("load", () => {
        const curtains = document.querySelectorAll('.loader-curtain');
        const curtain1 = document.querySelector('.loader > div:nth-child(2)');
        const curtain2 = document.querySelector('.loader > div:nth-child(3)');
        const curtain3 = document.querySelector('.loader > div:nth-child(4)');
        const curtain4 = document.querySelector('.loader > div:nth-child(5)');

        curtain1.style.width = '50%';
        curtain2.style.width = '50%';

        setTimeout(function() {
            curtain3.style.width = '50%';
            curtain4.style.width = '50%';
        }, 200);

        curtains.forEach((e) => {
            const loader = document.querySelector('.loader');
            e.addEventListener('transitionend', () => {
                loader.style.opacity = '0';
                loader.style.visibility = 'hidden';
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500)
            });
        })
    });
</script>
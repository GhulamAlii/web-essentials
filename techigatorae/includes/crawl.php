<?php


function isCrawler()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $crawlers = array(
        'Googlebot',                // Google
        'Bingbot',                  // Bing
        'Slurp',                    // Yahoo
        'DuckDuckBot',              // DuckDuckGo
        'Baiduspider',              // Baidu
        'YandexBot',                // Yandex
        'Sogou',                    // Sogou
        'Exabot',                   // Exalead
        'facebot',                  // Facebook
        'ia_archiver',              // Alexa
        'GTmetrix',                 // BETA
        'Chrome-Lighthouse',        // ALPHA
    );

    foreach ($crawlers as $crawler) {
        if (stripos($userAgent, $crawler) !== false) {
            return true;
        }
    }

    return false;
}

if (isCrawler()) {
} else {
?>
    <link type="text/css" rel="stylesheet" href="<?php echo $actual_link . 'assets/css/intlTelInput.min.css?=cdsc' ?>" />
    <script type="text/javascript" src="<?php echo $actual_link ?>assets/js/bootstrap5.min.js?=cdsc" async></script>

    <script type="text/javascript" src="<?php echo $actual_link ?>assets/js/fa06all.min.js?=cdsc" async></script>
    <script type="text/javascript" src="<?php echo $actual_link ?>assets/js/aos.min.js?=cdsc" async></script>
    <script type="text/javascript" src="<?php echo $actual_link ?>assets/js/intlTelInput.min.js?=cdsc" async></script>
    <script type="text/javascript" src="<?php echo $actual_link ?>assets/js/lazysizes.min.js?=cdsc" async></script>
    <script type="text/javascript" src="<?php echo $actual_link . 'assets/js/custom.min.js?=cdsc' ?>" async></script>

    <script>
        function bannerVideoInject() {
            let e = document.querySelector('#bannerVideo'),
                s = document.createElement('video');
            (s.style.objectFit = 'cover'),
            (s.style.width = '100%'),
            (s.style.height = '100%'),
            (s.poster = './assets/images/videoposter.webp'),
            (s.muted = !0),
            (s.loop = !0),
            (s.playsInline = !0),
            (s.autoplay = !0);
            let i = document.createElement('source');
            (i.src = './assets/images/video1.mp4'),
            (i.type = 'video/mp4'),
            s.appendChild(i),
                e.appendChild(s);
        }
        if (window.location.pathname === '/') {
            bannerVideoInject();
        };
    </script>
<?php
}
?>
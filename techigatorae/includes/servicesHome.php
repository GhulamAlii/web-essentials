<section class="services animate" data-delay="0s">
    <section class="services__wrap ">
        <div class="services__items translateX-parent">
            <div class="line-heading translateX-right">
                <h2 class="outline-text ">
                    <?php echo $sevicesHeading; ?>
                </h2>
            </div>
            <div class="services-thumb-slider-wrapper">
                <div class="services-thumb-slider swiper">
                    <div class="swiper-wrapper">

                        <?php
                        $verticleServices = [
                            [
                                'servicesTitle' => 'Mobile App Development',
                                'servicesUrl' => $actual_link . 'mobile-app-development-company-dubai'
                            ],
                            [
                                'servicesTitle' => 'iOS App Development',
                                'servicesUrl' => $actual_link . 'ios-app-development'
                            ],
                            [
                                'servicesTitle' => 'Android App Development',
                                'servicesUrl' => $actual_link . 'android-app-development'
                            ],
                            [
                                'servicesTitle' => 'Flutter App Development',
                                'servicesUrl' => $actual_link . 'flutter-app-development'
                            ],
                            [
                                'servicesTitle' => 'React Native App Development',
                                'servicesUrl' => $actual_link . 'react-native-app-development-dubai'
                            ],
                            [
                                'servicesTitle' => 'Game Development',
                                'servicesUrl' => $actual_link . 'game-development-dubai'
                            ],
                            [
                                'servicesTitle' => 'Digital Branding',
                                'servicesUrl' => $actual_link . 'services/branding-agency-dubai'
                            ],
                            [
                                'servicesTitle' => 'Logo Design',
                                'servicesUrl' => $actual_link . 'services/logo-design-dubai'
                            ],
                            [
                                'servicesTitle' => 'UI/UX Design',
                                'servicesUrl' => $actual_link . 'services/ui-ux-design-dubai'
                            ],
                            [
                                'servicesTitle' => 'Company Profile Design',
                                'servicesUrl' => $actual_link . '#'
                            ],
                        ];

                        foreach ($verticleServices as $index => $service_single) : ?>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h3>
                                        <a href="<?php echo $service_single['servicesUrl'] ?>"><?php echo $service_single['servicesTitle'] ?></a>
                                    </h3>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="scroll-text">
                    <span class="mouse">
                        <span class="move"></span>
                    </span>
                    <span class="head">Scroll</span>
                </div>
            </div>
            <div class="services-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/webApp.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/webApp.webp' ?>" alt="Mobile app development">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            There are approximately 54% of smart mobile phone users worldwide, and the demand for mobile app development has increased. A lot of businesses are transitioning from traditional digital platforms to mobile-first experiences. There was a time when users spent hours and hours to get what they wanted with endless web browsing.
                                        </p>
                                        <p>
                                            Whether it's Android, iOS, or web apps, the demand for <a href="/mobile-app-development-company-dubai">mobile app development services in Dubai</a> has doubled over the past 2 decades.
                                        </p>
                                        <p>
                                            Considering this high demand, we provide interactive and intuitive mobile app development services across different platforms that:
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Increase customer engagement</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Improves convenience and accessibility for the user</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Increase your brand loyalty</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Provide monetization opportunities</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Reaches global audience for increased customer base</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/webAppBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/webAppBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/iosImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/iosImage.webp' ?>" alt="ios app development">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            The demand for iOS apps has drastically increased in the last with over 1.46 Billion active iOS mobile users worldwide. More and more businesses need top-notch iOS software applications to bring their ideas to life.
                                        </p>

                                        <p>
                                            Considering iOS’s complex nitty-gritty, our expert software developers in Dubai ensure compliance with strict Apple Store guidelines. We create apps that are both flexible in terms of upgrades and meet high user expectations in terms of functionalities and performance.
                                        </p>

                                        <p>
                                            iOS app development is one of our core software development services in Dubai, and we're proud to have some of the <a href="/ios-app-development">finest iOS developers in Dubai</a> who specialize in iOS applications with:
                                        </p>

                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Intuitive User Interface (UI)</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">High performance and speed</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Robust security and privacy</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Seamless integration with the Apple ecosystem</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Scalability and flexibility</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Exceptional User Experience (UX)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/iosBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/iosBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/andImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/andImage.webp' ?>" alt="android app development">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            With a dominance of over 48% of the World's population being Android users, Android is the most widely used mobile device across the world. Due to its mass appeal, more and more people are searching for solutions that are deployed on Android OS.
                                        </p>
                                        <p>
                                            At our software development company in Dubai, we create solutions that work seamlessly on all Android devices. Regardless of the size and resolution, seamless performance is our key assurance. Whether it's a smartphone, tablet, smart TV, or Android wearable, you'll get top-notch features on all devices.
                                        </p>
                                        <p>
                                            So, when you <a href="/android-app-development">hire our expert Android developers</a>, you don't need to worry about:
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Device compatibility issues</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Operating System compatibility issues</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Security concerns</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Performance optimization</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">User Interface (UI) consistency</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">App Store submission and updates</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/andBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/andBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/flutterImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/flutterImage.webp' ?>" alt="Flutter app development">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            Flutter is a cost-effective framework for creating digital products that work on both Android and iOS with one codebase. Techigator AE is one of its kind software company in Dubai offering <a href="/">reliable Flutter app development services</a>. Our Flutter developers build sleek, cross-platform products that work well on both platforms.
                                        </p>
                                        <p>
                                            Even though our solutions are cross-platform, we ensure they deliver a great user experience and seamless functionality. While they may have a larger memory size compared to the native, you’ll get an optimized performance across both platforms. We use strong security to keep your data safe from hackers and other threats.
                                        </p>
                                        <p>
                                            Our software development process makes us the best software development company in Dubai for Flutter. We also ensure rapid development and seamless updates so that you don't need to worry about:
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Scalability Issues</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Integration Challenges</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Code Quality and Maintainability</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Cross-Platform Consistency</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Performance Optimization</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/flutterbg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/flutterbg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/reactImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/reactImage.webp' ?>" alt="React native app development">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            React Native is another powerful framework that allows efficient cross-platform development using a single codebase but with more platforms in consideration.
                                        </p>
                                        <p>
                                            Our React Native app developers create high-end solutions that work seamlessly across Android, iOS, web, Windows, and macOS. We develop <a href="/react-native-app-development-dubai">intuitive, high-speed applications with a native look and feel</a>. Our prime focus is to deliver a smooth user experience while optimizing performance and maintaining robust security standards. Our rigorous QA ensures that every app works as intended on every platform.
                                        </p>
                                        <p>
                                            Choosing Techigator AE means partnering with a leading software development company in Dubai, UAE that ensures rapid development, timely updates, and addresses your concerns regarding:
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Code reusability</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Performance and speed</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">User Interface consistency</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Integration with native modules</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Scalability</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Maintenance and updates</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/reactAppbg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/reactAppbg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/gameImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/gameImage.webp' ?>" alt="Game development">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            Over the past few years, the gaming industry has revolutionized to its peak than ever before, and so have the opportunities to generate revenue through it. At Techigator AE, we design and <a href="/game-development-dubai">develop top-notch industry-standard mobile games</a> that not only get thousands of downloads but also get high retention rates and excellent reviews.
                                        </p>
                                        <p>
                                            The game designers and developers in our software development company in Dubai build interactive and optimized 2D and 3D gaming experiences using the latest and optimized toolkits and plugins.
                                        </p>
                                        <p>
                                            We create games with:
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Engaging gameplay</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Stunning graphics</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Intuitive controls</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Robust performance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Innovative features</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Scalability and upgradation</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/gameBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/gameBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/brandImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/brandImage.webp' ?>" alt="digital branding">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            You can't deny the fact that your brand is so much more than a name, it's your story that the world needs to hear. At Techigator AE, we help you <a href="/services/branding-agency-dubai">create a digital brand that truly connects</a> with your audience.
                                        </p>
                                        <p>
                                            Digital branding is everything from your logo to your online presence, we ensure every element of your branding strategy complements each other. Our team specializes in creating a stronger brand identity that captures the essence of your business and leaves a lasting impression on your target audience.
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Compelling brand visuals</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Consistent identity</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Remarkable presence</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Strong brand narrative</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/brandBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/brandBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/logoImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/logoImage.webp' ?>" alt="Logo Design">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            Think of your logo as the heartbeat of your brand, it pulses with the energy and essence of your identity. At Techigator AE, we specialize in creating <a href="/services/logo-design-dubai">logos that look fantastic and communicate your brand.</a>
                                        </p>
                                        <p>
                                            We have expert designers who craft logos that are impressive and capture the audience's attention immediately. A perfectly designed logo also helps you stand out in a crowded market. Thechigator AE takes care of everything from concept to final design, making sure that your logo remains effective, conveys the message, and is adaptable across various platforms. Partnering with us means joining hands with a <a href="/services/logo-design-dubai">leading logo design company in Dubai</a>, UAE.
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Creative and unique designs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Brand storytelling</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">High-quality visuals</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Consistent identity</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/logoBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/logoBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/uiuxImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/uiuxImage.webp' ?>" alt="UI/UX Design">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            User interface and experience are the very first interactions your user makes afetr downloading your app or visiting your website. Being a leading software development company in Dubai, we know that great UI/UX design is key to making your brand shine and keeping your users engaged and happy.
                                        </p>
                                        <p>
                                            Our UI/UX design isn’t just about looking good, it’s about creating a smooth, intuitive experience that users love. We make sure it's responsive and easy to navigate, so users can enjoy a seamless journey from start to finish. When you choose our <a href="/services/ui-ux-design-dubai">UI/UX services</a>, you get:
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Intuitive designs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Responsive layouts</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Seamless user experience</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Stunning interfaces</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/uiuxBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/uiuxBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-item twocol-row">
                            <div class="service-item__wrapper twocol-row">
                                <div class="service-item__img">
                                    <div class="img-wrapper">
                                        <img src="<?php echo $actual_link . 'assets/images/companyProfileImage.webp' ?>"
                                            class="lazy-img myLazy lazyload" width="auto" height="auto"
                                            data-src="<?php echo $actual_link . 'assets/images/companyProfileImage.webp' ?>" alt="company profile Design">
                                    </div>
                                    <div class="descrip-wrapper">
                                        <p>
                                            There are millions of businesses online or offline, and yours can easily be overlooked in this swarming market. At Techigator AE, we create company profiles that make your brand truly unforgettable. Our main focus is to first understand the essence of your business so that we get into your shoes. No matter if your business falls under finance, technology, real estate, e-commerce, or any other niche, we take care of all niches precisely.
                                        </p>
                                        <p>
                                            We use our creativity to design personalized profiles that reflect your brand’s unique story. We create customized profiles for your business.
                                        </p>
                                        <ul class="service-item__list-wrapper">
                                            <li>
                                                <a href="javascript:;">Bespoken designs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Comprehensive business details</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Convert Eyeballs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Multiple formats</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="anchor-wrapper services-anchor">
                                    <a href="javascript:;" data-bs-target="#floatingFormModal" data-bs-toggle="modal" class="arrow-anchor">
                                        <span>Read More</span>
                                        <div class="img-wrapper">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-item__bg">
                                    <img src="<?php echo $actual_link . 'assets/images/companyProfileBg.webp' ?>"
                                        class="lazy-img myLazy lazyload" width="auto" height="auto"
                                        data-src="<?php echo $actual_link . 'assets/images/companyProfileBg.webp' ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</section>
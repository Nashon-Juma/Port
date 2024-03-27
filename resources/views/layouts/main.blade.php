<!--resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nashon Portfolio">
    <meta name="keywords"
        content="nashon juma , nashon ,juma ,web developer kenya,web-developer, portfolio, portfolio kenya, devops,devops kenya,sales funnel optimization,brand positioning,messaging development,user experience (ux) consulting,process automation,user testing,personas,data-driven design,design thinking workshops,user interface (ui) design,interaction design,graphic design,animation,wordpress development,drupal development,laravel development,platform migration,data migration,ecommerce development,website maintenance,website hosting,api integration,crm integration,lead generation,lead nurturing,media management,digital marketing campaigns,crm management">

    <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="images/pox.png" />
    <meta itemprop="name" content="Nashon Portfolio" />
    <meta itemprop="url" content="https://nashon.techmates.team" />
    <meta name="twitter:title" content="shonjuma" />
    <meta name="twitter:url" content="https://twitter.com/shonjuma" />
    <link rel="canonical" href="https://nashon.techmates.team/">
    <meta name="twitter:site" content="@shonjuma">
    <meta name="twitter:creator" content="@shonjuma">
    <meta name="twitter:card" content="summary">


    <title>NashonJuma</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="css/font.css" rel="stylesheet">

    <!-- All CSS files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/progressbar.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google tag (gtag.js) -->
    <script async src="js/create.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-PSKS7M0BEQ');
    </script>


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
        })(window, document, 'script', 'dataLayer', 'GTM-W7XNGQW');
    </script>
    <!-- End Google Tag Manager -->

</head>



<body class="dark">
    <!-- Google Tag Manager (noscript) -->
    <noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7XNGQW"height="0" width="0"
            style="display:none;visibility:hidden"></iframe> </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>
    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>
    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <header class="header__area-3 tms-hero">
        <div class="header__inner-3">
            <div class="header__logo-2">
                <a href="/" class="logo-dark">
                    <img src="images/logo-black.png" alt="Site Logo">
                </a>
                <a href="https://techmates.team"  target="_blank" class="logo-light">{{-- NJ logo --}}
                    <img src="images/site-logo-white-2.png" alt="Logo">
                </a>
            </div>
            <div class="header__nav-2">
                <ul class="main-menu-3 menu-anim">
                    <li>
                        <a href="index">home</a>
                    </li>
                    <li>
                        <a href="about">about</a>
                    </li>
                    <li>
                        <a href="services">services</a>
                    </li>
                    <li>
                        <a href="contact">contact</a>
                    </li>
                </ul>
            </div>
            <div class="header__nav-icon-3">
                <button id="open_offcanvas">
                    <img src="images/menu-black.png" alt="Menubar Icon">
                </button>
            </div>
        </div>
    </header>
    </div>
    <div class="offcanvas__area tms_overlay">
        <div class="offcanvas__body">
            <div class="offcanvas__left">
                <div class="offcanvas__logo">
                    <a href="index">
                        <img src="images/site-logo-white-2.png" alt="Offcanvas Logo">
                    </a>
                </div>
                <div class="offcanvas__social">
                    <h3 class="social-title">Follow Me</h3>
                    <ul>
                        <li>
                            <a href="mailto:developer@jumaz.anonaddy.com" target="_blank">Gmail</a>
                        </li>
                        <li>
                            <a href="https://github.com/Nashon-Juma" target="_blank">GitHub</a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/nashon-juma/">LinkedIn</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/shonjuma" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/users/22793177/nashon"
                                target="_blank">StackOverflow</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__mid">
                <div class="offcanvas__menu-wrapper">
                    <nav class="offcanvas__menu">
                        <ul class="menu-anim">
                            <li>
                                <a href="index">home</a>
                            </li>
                            <li>
                                <a href="about">about</a>
                            </li>
                            <li>
                                <a href="services">services</a>
                            </li>
                            <li>
                                <a href="contact">contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="offcanvas__right">
                <div class="offcanvas__contact">
                    <div class="contact__title d-flex align-items-start">
                        <img src="images/kenya-flag.png">
                        <div>
                            <h3>Nairobi, Kenya</h3>
                            <p>Developer's Team Office </p>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <p>3073-3074, Silver Business Point,</p>
                            <p>Near NgongRoad, Dagoretti</p>
                            <p>Surat – 394105</p>
                            <p>Gujarat, Kenya</p>
                        </li>
                        <li>
                            <p>
                                <a href="tel:+91 – 94 268 88826">+91 94 268 88826</a>
                            </p>
                            <p>
                                <a href="tel:+91 – 90 335 01370">+91 90 335 01370</a>
                            </p>
                        </li>
                        <li>
                            <a href="mailto:info@techmatessolutions.com">developer@juma.annady.com</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas__contact">
                    <div class="contact__title d-flex align-items-start">
                        <img src="images/kenya.png">
                        <div>
                            <h3>Kiambu, Kenya</h3>
                            <p>Tio</p>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <p>197 Kinoo 18,</p>
                            <p>East ,</p>
                            <p>NJ</p>
                        </li>

                        <li>
                            <a href="mailto:info@techmatessolutions.com">developer@juma.annady.com</a>
                        </li>
                    </ul>
                </div>
                <img src="images/11.png" alt="shape" class="shape-1">
                <img src="images/12.png" alt="shape" class="shape-2">
            </div>
            <div class="offcanvas__close">
                <button type="button" id="close_offcanvas">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    </div>
    <div id="smooth-wrapper">
        <div id="smooth-content">



                <!-- Main content area -->
                @yield('content')

            <!-- Footer content -->

            <!-- Page content -->
            <footer class="footer__area-3 tms-footer">
                <div class="footer__top-3">
                    <div class="footer__top-wrapper-3">
                        <div class="footer__logo-3 pt-120">
                            <img src="images/site-logo-white-2.png" alt="Footer Logo">
                            <p>I elevate brands across the globe with game-changing impact. I work with organizations
                                and companies of all sizes, in every moment of their growth</p>
                        </div>
                        <div class="footer__social-3">
                            <ul>
                                <li>
                                    <a href="mailto:developer@jumaz.anonaddy.com" target="_blank">Gmail</a>
                                </li>
                                <li>
                                    <a href="https://github.com/Nashon-Juma" target="_blank">GitHub</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/nashon-juma/">LinkedIn</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/shonjuma" target="_blank">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://stackoverflow.com/users/22793177/nashon"
                                        target="_blank">StackOverflow</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__contact-3">
                            <a class="end" href="contact">Let’s talk</a>
                        </div>
                    </div>
                </div>
                <div class="footer__btm-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="footer__copyright-3">
                                    <p>Copyright © 2024 Juma All Rights Reserved </p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="footer__nav-2">
                                    <ul class="footer-menu-2 menu-anim">
                                        <li>
                                            <a href="index">home</a>
                                        </li>
                                        <li>
                                            <a href="about">about</a>
                                        </li>
                                        <li>
                                            <a href="services">services</a>
                                        </li>
                                        <li>
                                            <a href="contact">contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer area end -->

            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/swiper-bundle.min.js"></script>
            <script src="js/counter.js"></script>
            <script src="js/gsap.min.js"></script>
            <script src="js/ScrollTrigger.min.js"></script>
            <script src="js/ScrollToPlugin.min.js"></script>
            <script src="js/ScrollSmoother.min.js"></script>
            <script src="js/SplitText.min.js"></script>
            <script src="js/chroma.min.js"></script>
            <script src="js/mixitup.min.js"></script>
            <script src="js/vanilla-tilt.js"></script>
            <script src="js/jquery.meanmenu.min.js"></script>
            <script src="js/main.js"></script>


            </footer>
</body>
</html>

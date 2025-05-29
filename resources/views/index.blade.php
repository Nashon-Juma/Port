@extends('layouts.main')
<!-- Page content -->
@section('content')
<main>
    <section class="hero__area-3 tms-hero">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="hero__inner-3">
                        <div style="font-family: 'Cabin Sketch'" class="sec-title-wrapper">
                            <h2 class="sec-sub-title">Hello I'm</h2>
                            <h3 class="sec-title title-left">Nashon</h3>
                            <h3 class="sec-title title-right">Juma</h3>
                        </div>

                        <div class="img-round">
                            <img src="images/23.png" alt="shape">
                        </div>
                        <div class="hero__text-3">
                            <p class="animation__word_come">
                                A passionate and driven
                                <span style="
                                    color: #ff6601;
                                    font-weight: bold;
                                    font-size:26px;
                                    text-shadow: 2px 2px 4px rgba(255, 94, 0, 0.5);
                                ">website developer</span>.
                                Excelling in creating stunning websites, applications, dashboards and user-friendly
                                interfaces that are both visually appealing and functional.
                            </p>
                        </div>
                        <div class="scroll-down">
                            <button>
                                <img src="images/arrow-down-sm.png" alt="arrow icon">
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="video-info">
                {{-- <div class="img-round">
                    <img src="images/23.png" alt="shape">
                </div> --}}
            </div>
        </div>
        @if (!isset($_COOKIE['show_hero_image']) || $_COOKIE['show_hero_image'] === 'true')
        <div id="hero-img-container">
            <img src="images/hero-img.jpg" alt="Hero Image" class="hero3-img">
        </div>
        @endif
    </section>

    {{--
    <section class="brand__area tms-brand">
        <div class="container pt-140 pb-140">
            <div class="row">
                <div class="col-xxl-12">
                    <h2 class="brand__title-3 title-anim">We worked with global largest brands </h2>
                    <div class="brand__list-3">
                        <div class="brand__item-2 fade_bottom">
                            <img src="images/client-1.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item-2 fade_bottom">
                            <img src="images/client-2.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item-2 fade_bottom">
                            <img src="images/client-3.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item-2 fade_bottom">
                            <img src="images/client-4.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item-2 fade_bottom">
                            <img src="images/client-5.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item-2 fade_bottom">
                            <img src="images/client-6.png" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="about__area-3 tms-about">
        <div class="container pt-140 pb-110">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__img-3">
                        <img src="images/about.jpg" alt="About Thumbnail" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-sub-title title-anim">Authenticity always wins</h2>
                        <h3 class="sec-title title-anim">Empower Your Brand Through Tailored Web Solutions</h3>
                    </div>
                    <div class="sec-text-wrapper">
                        <div class="sec-text text-anim">
                            <p> Transform your digital vision into reality with tailored design, strategic planning,
                                and development built just for you. Together, we’ll create a powerful online presence
                                that
                                resonates with your audience and leaves a lasting impression.</p>

                            <p> From stunning website design to intuitive mobile apps and engaging UI/UX, we’ll craft
                                comprehensive
                                solutions that bring out the best in your brand. Let’s explore the digital world and
                                unlock new possibilities
                                for your business, side by side.</p>
                            <div class="btn_wrapper">
                                <a href="./nashonjumaresume.pdf" target="_blank" class="wc-btn-light btn-hover btn-item">
                                    <span></span> View My Resume <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service__area-3 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper pt-130 text-anim">
                        <h2 class="sec-sub-title title-anim">Services</h2>
                        <h3 class="sec-title title-anim">Bringing imaginations <br> to reality</h3>
                        <p>Unleashing the full potential of your digital vision through collaborative problem-solving
                            and creative innovation. My full-spectrum strategy, design, and engineering expertise come
                            together to deliver elegant solutions that drive results and impact. Fueled by a passion for
                            data-driven insights and a user-focused approach, let us be your partner in driving your
                            next transformation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xx-12">
                    <div class="service__list-3 tms-services">
                        <div class="service__item-3 service_animation">
                            <h3>
                                <a href="services" class="service__title-3">1. Core Development Strategy</a>
                            </h3>
                            <div class="service__content-3">
                                <p>Defining backend strategies to improve scalability, security, and efficiency.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="">
                                            {{-- <li>
                                                <img src="images/strategy-01.svg">Database Design & Optimization
                                            </li> --}}
                                            <li>
                                                <img src="images/strategy-02.svg">API Lifecycle Management (Design,
                                                Documentation, and Testing)
                                            </li>
                                            <li>
                                                <img src="images/strategy-03.svg">Scalability and Load Testing Strategy
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="services__secBlock">
                                            <li>
                                                <img src="images/strategy-04.svg">Performance Monitoring & Scaling
                                                Strategies
                                            </li>
                                            <li>
                                                <img src="images/strategy-05.svg">Deployment Strategy and CI/CD
                                                Integration

                                            </li>
                                            {{-- <li>
                                                <img src="images/strategy-06.svg">Security and Compliance
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service__btn-3">
                                <div class="btn_wrapper">
                                    <a href="services" class="wc-btn-black btn-hover btn-item">
                                        <span></span> Details <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service__hover-3" style="background-image: url(images/imgStrategy.jpg);"></div>
                        </div>
                        <div class="service__item-3 service_animation">
                            <h3>
                                <a href="services" class="service__title-3 ">2. Backend Development</a>
                            </h3>
                            <div class="service__content-3">
                                <p>Building robust, maintainable backend systems to power applications and deliver
                                    seamless experiences.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="">
                                            <li>
                                                <img src="images/design-01.svg">RESTful API Development
                                            </li>
                                            <li>
                                                <img src="images/design-02.svg">Automated Testing & Test-Driven
                                                Development (TDD)
                                            </li>
                                            <li>
                                                <img src="images/design-03.svg">Database Management (MySQL, PostgreSQL,
                                                MongoDB)
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="services__secBlock">
                                            <li>
                                                <img src="images/design-04.svg">Authentication & Authorization (OAuth,
                                                JWT, Session-Based)
                                            </li>
                                            {{-- <li>
                                                <img src="images/design-05.svg">Caching Strategies (Redis, Memcached)
                                            </li>
                                            <li>
                                                <img src="images/design-06.svg">Cloud Functions & Serverless
                                                Architecture
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service__btn-3">
                                <div class="btn_wrapper">
                                    <a href="services" class="wc-btn-black btn-hover btn-item">
                                        <span></span> Details <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service__hover-3" style="background-image: url(images/imgDesign.jpg);"></div>
                        </div>
                        <div class="service__item-3 service_animation">
                            <h3 class="">
                                <a href="services" class="service__title-3">3. Integration & Automation</a>
                            </h3>
                            <div class="service__content-3">
                                <p>Ensuring smooth interconnectivity between platforms and streamlining processes for
                                    efficiency.
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="">
                                            {{-- <li>
                                                <img src="images/engineering-01.svg">Data Synchronization Across
                                                Platforms
                                            </li> --}}
                                            <li>
                                                <img src="images/engineering-02.svg">Third-Party API Integration
                                                (Payment Gateways, Social Media, etc.)
                                            </li>
                                            <li>
                                                <img src="images/engineering-03.svg">Data Pipelines and ETL Processes
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="services__secBlock">
                                            <li>
                                                <img src="images/engineering-04.svg">Message Queues (RabbitMQ, Kafka)
                                            </li>
                                            <li>
                                                <img src="images/engineering-05.svg">Workflow Automation (Scripting,
                                                Cron Jobs)
                                            </li>
                                            <li>
                                                <img src="images/engineering-06.svg">CRM and ERP Integration
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service__btn-3 ">
                                <div class="btn_wrapper">
                                    <a href="services" class="wc-btn-black btn-hover btn-item">
                                        <span></span> Details <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service__hover-3" style="background-image: url(images/imgEngineering.jpg);">
                            </div>
                        </div>
                        <div class="service__item-3 service_animation">
                            <h3 class="">
                                <a href="services" class="service__title-3">4. Data Management & Analytics</a>
                            </h3>
                            <div class="service__content-3">
                                <p>Optimizing data handling and implementing insights-driven solutions for improved
                                    decision-making. </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="">
                                            <li>
                                                <img src="images/marketing-01.svg">Database Administration &
                                                Maintenance
                                            </li>
                                            <li>
                                                <img src="images/marketing-02.svg">Data Migration & Backup Strategies
                                            </li>
                                            <li>
                                                <img src="images/marketing-03.svg">Logging & Error Monitoring
                                            </li>
                                            <li>
                                                <img src="images/marketing-04.svg">Analytics & Reporting Setup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="services__secBlock">
                                            {{-- <li>
                                                <img src="images/marketing-05.svg">Digital Marketing Campaigns
                                            </li>
                                            <li>
                                                <img src="images/marketing-06.svg">CRM Management
                                            </li>
                                            <li>
                                                <img src="images/marketing-07.svg">Content Creation
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="service__btn-3">
                                <div class="btn_wrapper">
                                    <a href="services" class="wc-btn-black btn-hover btn-item">
                                        <span></span> Details <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service__hover-3" style="background-image: url(images/imgMarketing.jpg);">
                            </div>
                        </div>
                        <div class="service3__img-wrap">
                            <div class="service3__img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--

    <section class="portfolio__area-3">
        <div class="container pt-100 pb-150">
            <div class="row d-flex">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-sub-title title-anim">Some Previous <br>Works </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="swiper portfolio__slider-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="portfolio__slide-3">
                                    <a href="#">
                                        <h3 class="portfolio__title-3">Megacare <span>Website</span> 2022 </h3>
                                        <img src="images/featured-01.jpg" alt="Portfolio Image">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio__slide-3">
                                    <a href="#">
                                        <h3 class="portfolio__title-3">Medpoint <span>Website</span> 2023 </h3>
                                        <img src="images/featured-02.jpg" alt="Portfolio Image">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio__slide-3">
                                    <a href="#">
                                        <h3 class="portfolio__title-3">Labtots <span>Website</span> 2022 </h3>
                                        <img src="images/featured-03.jpg" alt="Portfolio Image">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio__slide-3">
                                    <a href="#">
                                        <h3 class="portfolio__title-3">Unwwind <span>Website</span> 2023 </h3>
                                        <img src="images/featured-03.jpg" alt="Portfolio Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-btn">
                            <div class="pp-prev">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div class="pp-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}

    {{--
    <section class="testimonial__area-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="swiper testimonial__slider-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial__slide-3">
                                <p>When we talk about Alts, we do not mean a typical business partner, but rather a team
                                    that collaborates with us daily, always there for us when we encounter difficulties
                                    and celebrate achievements. We see in Alts our best ally for success!</p>
                                <h2 class="client__name-3">Maria D. Halk</h2>
                                <h3 class="client__role-3">Managing Director</h3>
                            </div>
                            <div class="swiper-slide testimonial__slide-3">
                                <p>When we talk about Alts, we do not mean a typical business partner, but rather a team
                                    that collaborates with us daily, always there for us when we encounter difficulties
                                    and celebrate achievements. We see in Alts our best ally for success!</p>
                                <h2 class="client__name-3">Maria D. Halk</h2>
                                <h3 class="client__role-3">Managing Director</h3>
                            </div>
                            <div class="swiper-slide testimonial__slide-3">
                                <p>When we talk about Alts, we do not mean a typical business partner, but rather a team
                                    that collaborates with us daily, always there for us when we encounter difficulties
                                    and celebrate achievements. We see in Alts our best ally for success!</p>
                                <h2 class="client__name-3">Maria D. Halk</h2>
                                <h3 class="client__role-3">Managing Director</h3>
                            </div>
                            <div class="swiper-slide testimonial__slide-3">
                                <p>When we talk about Alts, we do not mean a typical business partner, but rather a team
                                    that collaborates with us daily, always there for us when we encounter difficulties
                                    and celebrate achievements. We see in Alts our best ally for success!</p>
                                <h2 class="client__name-3">Maria D. Halk</h2>
                                <h3 class="client__role-3">Managing Director</h3>
                            </div>
                            <div class="swiper-slide testimonial__slide-3">
                                <p>When we talk about Alts, we do not mean a typical business partner, but rather a team
                                    that collaborates with us daily, always there for us when we encounter difficulties
                                    and celebrate achievements. We see in Alts our best ally for success!</p>
                                <h2 class="client__name-3">Maria D. Halk</h2>
                                <h3 class="client__role-3">Managing Director</h3>
                            </div>
                        </div>
                        <div class="next-button swipper-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                        <div class="prev-button swipper-btn">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__images-3 animation_image_zoom">
            <img src="images/testimonial-01.jpg" alt="testimonial Image" class="testimonial3__img">
            <img src="images/testimonial-02.jpg" alt="testimonial Image" class="testimonial3__img-2">
            <img src="images/testimonial-03.jpg" alt="testimonial Image" class="testimonial3__img-3">
            <img src="images/testimonial-04.jpg" alt="testimonial Image" class="testimonial3__img-4">
            <img src="images/testimonial-05.jpg" alt="testimonial Image" class="testimonial3__img-5">
            <img src="images/testimonial-06.jpg" alt="testimonial Image" class="testimonial3__img-6">
        </div>
    </section>

    --}}



    <section class="workflow__area-3 tms-why-choose">
        <div class="workflow__wrapper-3">
            <div class="choose-wrapper wf_panel">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="choose-title-wrapper">
                                <h2 class="choose-title title-anim">Web <br> Developer</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="research__area wf_panel pt-150">
                <div class="container inner_content">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title">Some of the Brands I've worked with</h2>
                                <h3 class="sec-title">Empowered by Client Success Stories</h3>
                                <p>Partnering with diverse brands, I blend strategy, creativity, and technical know-how
                                    to craft standout digital solutions. My focus on collaboration ensures that every
                                    project not only meets but surpasses the expectations of those I serve. Experience
                                    the difference that client-centric excellence can make.</p>
                            </div>
                            <ul class="research__tools">
                                <li>
                                    <a href="mailto:developer@jumaz.anonaddy.com" target="_blank">Gmail</a>
                                </li>
                                <li>
                                    <a href="https://github.com/Nashon-Juma" target="_blank">GitHub</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/nashon-juma/">LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="research__list">
                                <div class="research__item">
                                    <div class="research__number"
                                        style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: white; border: 2px solid #f0f0f0;">
                                        <span>
                                            <img src="images/lido.png"
                                                style="width: 100%; height: auto; display: block;">
                                        </span>
                                    </div>
                                    <div class="research__info">
                                        <h4 class="research__title"
                                            style="margin: 0; color: #fff; text-decoration: none;">
                                            <a href="https://www.lidonation.com/" target="_blank" class="research-link">
                                                Lido Nation
                                                <i class="fas fa-external-link-alt"
                                                    style="margin-left: 5px; color: #b5b5b5;"></i>
                                            </a>
                                        </h4>
                                        <p>Empowering the next generation through blockchain technology and education,
                                            <br>
                                            I'm currently working full-time with Lido Nation to improve this innovative
                                            platform that bridges learning and digital finance.
                                        </p>
                                    </div>
                                </div>
                                <div class="research__item">
                                    <div class="research__number"
                                        style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: white; border: 2px solid #f0f0f0;">
                                        <span>
                                            <img src="images/ngong.png"
                                                style="width: 100%; height: auto; display: block;">
                                        </span>
                                    </div>
                                    <div class="research__info">
                                        <h4 class="research__title"
                                            style="margin: 0; color: #fff; text-decoration: none;">
                                            <a href="https://ngongroad.org/" target="_blank" class="research-link">
                                                NgongRoad Foundation
                                                <i class="fas fa-external-link-alt"
                                                    style="margin-left: 5px; color: #b5b5b5;"></i>
                                            </a>
                                        </h4>
                                        <p>I've freelanced with NgongRoad to
                                            improve their WordPress site that connects generous sponsors with children
                                            in need, turning hope into reality.</p>
                                    </div>
                                </div>
                                <div class="research__item">
                                    <div class="research__number"
                                        style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden; display: flex; align-items: center; justify-content: center; background-color: white; border: 2px solid #f0f0f0;">
                                        <span>
                                            <img src="images/hub.svg" alt="Hub of Teens logo"
                                                style="width: 100%; height: auto; display: block;">
                                        </span>
                                    </div>
                                    <div class="research__info">
                                        <h4 class="research__title"
                                            style="margin: 0; color: #fff; text-decoration: none;">
                                            <a href="https://hubofteens.shop/" target="_blank" class="research-link">
                                                Hub of Teens
                                                <i class="fas fa-external-link-alt"
                                                    style="margin-left: 5px; color: #b5b5b5;"></i>
                                            </a>
                                        </h4>
                                        <p>I crafted a vibrant eCommerce platform for Hub of Teens, making wellness
                                            accessible to
                                            all.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta__area-3 wf_panel">
                <div class="container pt-150 pb-150">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="cta__content-3">
                                <p class="cta__sub-title-2">Have a project in mind?</p>
                                <h2 class="cta__title-2">Let’s make something great together!</h2>
                                <div class="btn_wrapper">
                                    <a href="/zungumza" class="wc-btn-black btn-hover btn-item">
                                        <span></span>Book a <br>Free Session<i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="price__area pt-130 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-sub-title title-anim">Knowledge is Power, Empower yourself through</h2>
                        <h3 class="sec-title title-anim">Some of my <br>Latest Blogs</h3>
                    </div>
                    <div class="faq__list-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Digital Transformation & Product Development
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Partnering with you to bring your digital vision to life.I immerse myself in
                                            your business to craft meaningful
                                            experiences, drive innovation through experimentation, and bring your ideas
                                            to market faster. My expertise in cutting-edge connected devices and IoT
                                            technologies, such as Telematics and wearables accelerates your journey
                                            into the digital realm.</p>
                                        <a href="#">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Enterprise Application Management </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Optimize your digital investments and unlock new opportunities with my
                                            offshore agile development methods. My focus on quality and productivity
                                            drives down the total cost of ownership (TCO) of your applications by up to
                                            30% or more. With my expertise in cloud integrations, enterprise mobility,
                                            and data-driven insights, I empower your business to take
                                            full advantage of the digital frontier.</p>
                                        <a href="#">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"> Agile QA, Automation and
                                        DevOps </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Experience the thrill of rapid, high-quality development with my innovative
                                            test-first approach. I leverage BDD, open-source tools, DevOps, and
                                            continuous delivery to bring the excitement back to testing. With automation
                                            serving as the backbone of modernization, you can embrace change with
                                            confidence, free from the fear of regression.</p>
                                        <a href="#">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour"> Embedded & Hardware
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>I'm a trailblazers in the world of performance marketing. Constantly pushing
                                            the boundaries and reimagining what's possible. My comprehensive web
                                            development services are rooted in the power of intent – I strive to master
                                            the art of creating a seamless and impactful online presence that reaches my
                                            target audience through every paid, owned and earned media channel, no
                                            matter where they are located.</p>
                                        <a href="#">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__img-3">
                        <img src="images/price-area.jpg" alt="About Thumbnail" data-speed="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--
    <section class="blog__area-3 pb-140 blog__animation">
        <div class="container">
            <div class="row ">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper text-anim pt-130">
                        <h2 class="sec-sub-title">Recent Blog</h2>
                        <h3 class="sec-title title-anim">Read Updated <br>Journal </h3>
                        <p>Read our blog and try to see everything from every perspective. Our passion lies in making
                            everything accessible and aesthetic for everyone. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <article class="blog__item-3">
                        <div class="blog__img-wrapper-3">
                            <a href="pillars-and-steps-of-ux-research">
                                <div class="img-box">
                                    <img class="image-box__item" src="images/blog-1.jpg" alt="Blog Thumbnail">
                                    <img class="image-box__item" src="images/blog-1.jpg" alt="BLog Thumbnail">
                                </div>
                            </a>
                        </div>
                        <div class="blog__info-3">
                            <h4 class="blog__meta">
                                <a href="pillars-and-steps-of-ux-research">UX Research</a> . 10 Feb 2023
                            </h4>
                            <h5>
                                <a href="pillars-and-steps-of-ux-research" class="blog__title-3">Pillars & Steps of UX
                                    Research</a>
                            </h5>
                            <a href="pillars-and-steps-of-ux-research" class="blog__btn">Read More <span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <article class="blog__item-3">
                        <div class="blog__img-wrapper-3">
                            <a href="ui-ux-in-health-domain">
                                <div class="img-box">
                                    <img class="image-box__item" src="images/blog-2.jpg" alt="Blog Thumbnail">
                                    <img class="image-box__item" src="images/blog-2.jpg" alt="BLog Thumbnail">
                                </div>
                            </a>
                        </div>
                        <div class="blog__info-3">
                            <h4 class="blog__meta">
                                <a href="ui-ux-in-health-domain">UX Research</a> . 10 Feb 2023
                            </h4>
                            <h5>
                                <a href="ui-ux-in-health-domain" class="blog__title-3">UI Designs & UX Research in the
                                    Healthcare Domain:The DNA Assessment Mobile App</a>
                            </h5>
                            <a href="ui-ux-in-health-domain" class="blog__btn">Read More <span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}


</main>
<!--================End Main Content Area =================-->

<script>
    // Check screen width and set a cookie
        if (window.innerWidth > 768) {
            document.cookie = "show_hero_image=true";
        } else {
            document.cookie = "show_hero_image=false";
        }
</script>
@endsection

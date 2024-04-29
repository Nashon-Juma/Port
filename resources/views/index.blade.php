@extends('layouts.main')
<!-- Page content -->
@section('content')
    <main>
        <section class="hero__area-3 tms-hero">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="hero__inner-3">
                            <div style="font-family: 'Cabin Sketch'"class="sec-title-wrapper">
                                <h2 class="sec-sub-title">Hello I'm</h2>
                                <h3 class="sec-title title-left">Nashon</h3>
                                <h3 class="sec-title title-right">Jumaz</h3>
                            </div>

                            <div class="img-round">
                                <img src="images/23.png" alt="shape">
                            </div>
                            <div class="hero__text-3">
                                <p class="animation__word_come">As a passionate and driven website developer, I tackle significant
                                    obstacles with innovative solutions. I excel in creating stunning websites,
                                    applications, dashboards and user-friendly interfaces that are both visually appealing
                                    and functional.</p>
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
            <img src="images/hero.jpg" alt="Hero Image" class="hero3-img">
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
                            <h2 class="sec-sub-title title-anim">Who i am</h2>
                            <h3 class="sec-title title-anim">Pioneer in Website Skills, Driving Unmatched Results</h3>
                        </div>
                        <div class="sec-text-wrapper">
                            <div class="sec-text text-anim">
                                <p>Empower your brand through personalized design, strategic planning, and expert
                                    development. Allow me to be your guide in the journey to connect with your target
                                    audience and make a lasting impact.</p>
                                <p>Bring your digital vision to life. Talented, creative designer and developer expertly
                                    blends website design and development, mobile application mastery, and intuitive UI/UX
                                    services to deliver comprehensive solutions that elevate your online presence. Allow me
                                    to show you the best the digital realm has to offer with us.</p>
                                <div class="btn_wrapper">
                                    <a href="./Profile.pdf" target="_blank"  class="wc-btn-light btn-hover btn-item" >
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
                                    <a href="services" class="service__title-3">1. Strategy</a>
                                </h3>
                                <div class="service__content-3">
                                    <p>Crafting innovative solutions to drive business success through insightful strategy.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="">
                                                <li>
                                                    <img src="images/strategy-01.svg">Market & Competitive Research
                                                </li>
                                                <li>
                                                    <img src="images/strategy-02.svg">Marketing Strategy
                                                </li>
                                                <li>
                                                    <img src="images/strategy-03.svg">CRM & Sales Funnel Strategy
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="services__secBlock">
                                                <li>
                                                    <img src="images/strategy-04.svg">Brand Positioning & Messaging
                                                </li>
                                                <li>
                                                    <img src="images/strategy-05.svg">UX Consulting
                                                </li>
                                                <li>
                                                    <img src="images/strategy-06.svg">Process Automation
                                                </li>
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
                                <div class="service__hover-3" style="background-image: url(images/img-strategy.jpg);"></div>
                            </div>
                            <div class="service__item-3 service_animation">
                                <h3>
                                    <a href="services" class="service__title-3 ">2. Design</a>
                                </h3>
                                <div class="service__content-3">
                                    <p>Crafting visually impactful and user-centered solutions for optimal brand experience.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="">
                                                <li>
                                                    <img src="images/design-01.svg">User Testing & Personas
                                                </li>
                                                <li>
                                                    <img src="images/design-02.svg">Wireframing & Prototyping
                                                </li>
                                                <li>
                                                    <img src="images/design-03.svg">Data-Informed UX Design
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="services__secBlock">
                                                <li>
                                                    <img src="images/design-04.svg">Design Thinking Workshops
                                                </li>
                                                <li>
                                                    <img src="images/design-05.svg">UI & Interaction Design
                                                </li>
                                                <li>
                                                    <img src="images/design-06.svg">Graphic Design & Animation
                                                </li>
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
                                <div class="service__hover-3" style="background-image: url(images/img-design.jpg);"></div>
                            </div>
                            <div class="service__item-3 service_animation">
                                <h3 class="">
                                    <a href="services" class="service__title-3">3. Cross-Platform</a>
                                </h3>
                                <div class="service__content-3">
                                    <p>Building efficient, cutting-edge technology solutions to power your business forward.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="">
                                                <li>
                                                    <img src="images/engineering-01.svg">WordPress, Drupal & Laravel
                                                </li>
                                                <li>
                                                    <img src="images/engineering-02.svg">Platform & Data Migration
                                                </li>
                                                <li>
                                                    <img src="images/engineering-03.svg">eCommerce
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="services__secBlock">
                                                <li>
                                                    <img src="images/engineering-04.svg">Website Maintenance & Hosting
                                                </li>
                                                <li>
                                                    <img src="images/engineering-05.svg">Custom API Integration
                                                </li>
                                                <li>
                                                    <img src="images/engineering-06.svg">CRM and other middleware
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
                                <div class="service__hover-3" style="background-image: url(images/img-engineering.jpg);">
                                </div>
                            </div>
                            <div class="service__item-3 service_animation">
                                <h3 class="">
                                    <a href="services" class="service__title-3">4. Data-Management</a>
                                </h3>
                                <div class="service__content-3">
                                    <p>Elevating brand awareness and driving customer engagement through innovative
                                        marketing tactics. </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="">
                                                <li>
                                                    <img src="images/marketing-01.svg">Marketing Personas
                                                </li>
                                                <li>
                                                    <img src="images/marketing-02.svg">Lead Acquisition & Nurturing
                                                </li>
                                                <li>
                                                    <img src="images/marketing-03.svg">Brand Messaging
                                                </li>
                                                <li>
                                                    <img src="images/marketing-04.svg">Media Strategy & Management
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="services__secBlock">
                                                <li>
                                                    <img src="images/marketing-05.svg">Digital Marketing Campaigns
                                                </li>
                                                <li>
                                                    <img src="images/marketing-06.svg">CRM Management
                                                </li>
                                                <li>
                                                    <img src="images/marketing-07.svg">Content Creation
                                                </li>
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
                                <div class="service__hover-3" style="background-image: url(images/img-marketing.jpg);">
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
                        <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that collaborates with us daily, always there for us when we encounter difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                        <h2 class="client__name-3">Maria D. Halk</h2>
                        <h3 class="client__role-3">Managing Director</h3>
                      </div>
                      <div class="swiper-slide testimonial__slide-3">
                        <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that collaborates with us daily, always there for us when we encounter difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                        <h2 class="client__name-3">Maria D. Halk</h2>
                        <h3 class="client__role-3">Managing Director</h3>
                      </div>
                      <div class="swiper-slide testimonial__slide-3">
                        <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that collaborates with us daily, always there for us when we encounter difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                        <h2 class="client__name-3">Maria D. Halk</h2>
                        <h3 class="client__role-3">Managing Director</h3>
                      </div>
                      <div class="swiper-slide testimonial__slide-3">
                        <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that collaborates with us daily, always there for us when we encounter difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
                        <h2 class="client__name-3">Maria D. Halk</h2>
                        <h3 class="client__role-3">Managing Director</h3>
                      </div>
                      <div class="swiper-slide testimonial__slide-3">
                        <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that collaborates with us daily, always there for us when we encounter difficulties and celebrate achievements. We see in Alts our best ally for success!</p>
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
                                    <h2 class="choose-title title-anim">why <br> choose me </h2>
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
                                    <h2 class="sec-sub-title">why <br>choose me </h2>
                                    <h3 class="sec-title">Listening, Creating & Delivering with Expertise</h3>
                                    <p>Crafting digital excellence through the perfect balance of strategy, creativity, and
                                        technical expertise. My exceptional designing skills, possessing both intelligence
                                        and imaginative flair, is dedicated to elevating your digital experience and
                                        exceeding your every expectation. </p>
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
                                        <div class="research__number">
                                            <span>90%</span>
                                        </div>
                                        <div class="research__info">
                                            <h4 class="research__title">Creative</h4>
                                            <p>Transform your digital presence with the power of the extraordinary.I always bring the 'WOW'
                                                 factor to every project due to my lasting impression.</p>
                                        </div>
                                    </div>
                                    <div class="research__item">
                                        <div class="research__number">
                                            <span>100%</span>
                                        </div>
                                        <div class="research__info">
                                            <h4 class="research__title">Unique</h4>
                                            <p>Embrace individuality and stand out in the crowd.I'll
                                                help you be different and distinct in a sea of sameness.</p>
                                        </div>
                                    </div>
                                    <div class="research__item">
                                        <div class="research__number">
                                            <span>95%</span>
                                        </div>
                                        <div class="research__info">
                                            <h4 class="research__title">Enthusiastic</h4>
                                            <p>Embrace a passion for excellence in all I do. I'm
                                                deeply in love with delivering world-class digital solutions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter__area-3 wf_panel">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title">Why <br>Choose me </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="counter__wrapper-3">
                                    <div class="counter__item-3">
                                        <h2 class="counter__number">457</h2>
                                        <p>Project <br>completed </p>
                                    </div>
                                    <div class="counter__item-3">
                                        <h2 class="counter__number">46</h2>
                                        <p>Happy <br>customers </p>
                                    </div>
                                    <div class="counter__item-3">
                                        <h2 class="counter__number">2</h2>
                                        <p>Years <br>experiences </p>
                                    </div>
                                    <div class="counter__item-3">
                                        <h2 class="counter__number">8</h2>
                                        <p>Awards <br>achievement </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                <div class="counter__img-3">
                                    <img src="images/counter-3.png" alt="Counter Image">
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
                                        <a href="contact" class="wc-btn-black btn-hover btn-item">
                                            <span></span>Reach <br> Out<i class="fa-solid fa-arrow-right"></i>
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
                            <h2 class="sec-sub-title title-anim">Unlock your digital potential and drive lasting change
                            </h2>
                            <h3 class="sec-title title-anim">Realm of new <br>capabilities </h3>
                        </div>
                        <div class="faq__list-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne"> Digital Transformation & Product Development
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Partnering with you to bring your digital vision to life.I immerse myself in your business to craft meaningful
                                                experiences, drive innovation through experimentation, and bring your ideas
                                                to market faster. My expertise in cutting-edge connected devices and IoT
                                                technologies, such as Telematics and wearables accelerates your journey
                                                into the digital realm.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"> Enterprise Application Management </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Optimize your digital investments and unlock new opportunities with my
                                                offshore agile development methods. My focus on quality and productivity
                                                drives down the total cost of ownership (TCO) of your applications by up to
                                                30% or more. With my expertise in cloud integrations, enterprise mobility,
                                                and data-driven insights, I empower your business to take
                                                full advantage of the digital frontier.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree"> Agile QA, Automation and
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
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour"> Embedded & Hardware
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>I'm a trailblazers in the world of performance marketing. Constantly pushing
                                                the boundaries and reimagining what's possible. My comprehensive web
                                                development services are rooted in the power of intent – I strive to master
                                                the art of creating a seamless and impactful online presence that reaches my
                                                target audience through every paid, owned and earned media channel, no
                                                matter where they are located.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about__img-3">
                            <img src="images/img-price-area.jpg" alt="About Thumbnail" data-speed="auto">
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
                    <p>Read our blog and try to see everything from every perspective. Our passion lies in making everything accessible and aesthetic for everyone. </p>
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
                        <a href="pillars-and-steps-of-ux-research" class="blog__title-3">Pillars & Steps of UX Research</a>
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
                        <a href="ui-ux-in-health-domain" class="blog__title-3">UI Designs & UX Research in the Healthcare Domain:The DNA Assessment Mobile App</a>
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
@endsection

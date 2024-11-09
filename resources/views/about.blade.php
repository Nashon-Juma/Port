@extends('layouts.main')
<!-- Page content -->
@section('content')
    <main>
        <section class="hero__about">
            <div class="container g-0 line">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="hero__about-content">
                            <h1 class="hero-title animation__word_come">About<i> Me</i> </h1>
                            <div class="hero__about-info">
                                <div class="hero__about-btn">
                                    <div class="btn_wrapper">
                                        <a href="/contact" target="_blank" class="wc-btn-primary btn-hover btn-item">
                                            <span></span> Book  A<br> Free Session<i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="hero__about-text title-anim">
                                <p>I'm Nashon, and I've always loved working with machines and tech. As a kid, I'd spend hours in workshops, learning how engines worked and building gadgets from spare parts. The grease, the clink of tools, and the thrill of fixing something broken—it was my world. Over time, my curiosity shifted to computers and programming, leading me to a career in web development, where I got to shape websites and stay on top of new tech.
                                    But I never forgot my roots as a mechanic. I missed the hands-on work, so I found a way to bring it back into my life through embedded systems. It was the perfect blend of hardware and software, merging my skills in mechanics with my web development expertise. Now, as an embedded systems engineer and web developer, I get to create devices that are both functional and beautiful. Every project is a chance to combine my love for machines with the power of code, and I know there's always something new and exciting waiting ahead.</p>
                                </div>
                                <div class="hero__about-award img-round">
                                    <img src="images/23.png" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hero__about-row">
                    <div class="col-xxl-12">
                        <div class="hero__about-video">
                            <video loop muted autoplay playsinline controls poster="video/thumnail.jpg">
                                <source src="video/video-1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="story__area">
            <div class="container g-0 line pt-140">
                <span class="line-3"></span>
                <div class="sec-title-wrapper">
                    <div class="from-text">from <span>2021</span>
                    </div>
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <h2 class="sec-sub-title title-anim">Digital Agency</h2>
                            <h3 class="sec-title title-anim"> About Techmates </h3>
                            <a href="https://techmates.team/about" target="_blank" class="wc-btn-primary btn-hover btn-item">
                                <span></span> Visit <br> TechMates <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="story__text">
                                <p>TechMates, a dynamic company specializing in web development and digital marketing, emerged onto the scene just two years ago with a vision to revolutionize the online landscape.
                                    Founded by a group of passionate entrepreneurs with diverse backgrounds in technology and marketing, TechMates quickly gained recognition for its innovative approach and commitment to excellence. With a team of talented developers and digital marketers, the company embarked on a mission to help businesses thrive in the digital age by creating stunning websites and implementing cutting-edge digital marketing strategies. In just a short span of time, TechMates has become a trusted partner for businesses seeking to establish a strong online presence and drive growth through digital channels. Their portfolio boasts a diverse range of successful projects, from sleek and responsive websites that captivate audiences to strategic marketing campaigns that deliver measurable results. As TechMates continues to grow and expand its reach, it remains dedicated to its core values of creativity, collaboration, and customer satisfaction, poised to lead the way in the ever-evolving world of web development and digital marketing.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="story__img-wrapper">
                            <img src="images/story1.jpg" alt="Story Thumbnail" class="w-100">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="story__img-wrapper img-anim">
                            <img src="images/story2.jpg" alt="Story Thumbnail" data-speed="auto">
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="story__img-wrapper">
                            <img src="images/story3.jpg" alt="Story Thumbnail">
                            <img src="images/story4.jpg" alt="Story Thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="counter__area">
            <div class="container g-0 line pb-140 pt-140">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="counter__wrapper-2 counter_animation">
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">117</h2>
                                <p>Project <br>completed </p>
                                <span class="counter__border"></span>
                            </div>
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">24</h2>
                                <p>Happy <br>customers </p>
                                <span class="counter__border"></span>
                            </div>
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">2</h2>
                                <p>Years <br>experiences </p>
                                <span class="counter__border"></span>
                            </div>
                            <div class="counter__item-2 counter__anim">
                                <h2 class="counter__number">8</h2>
                                <p>Awards <br>achievement </p>
                                <span class="counter__border"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="brand__area">
            <div class="container g-0 line pt-140 pb-140">
                <span class="line-3"></span>
                <div class="row g-0">
                    <div class="col-xxl-12">
                        <div class="sec-title-wrapper">
                            <h3 class="sec-title title-anim"> Considering me?  You’re in good company...</h3>
                        </div>
                    </div>
                    <div class="brand__list">
                        <div class="brand__item fade_bottom">
                            <img src="images/client-1.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item fade_bottom">
                            <img src="images/client-2.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item fade_bottom">
                            <img src="images/client-3.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item fade_bottom">
                            <img src="images/client-4.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item fade_bottom">
                            <img src="images/client-5.png" alt="Brand Logo">
                        </div>
                        <div class="brand__item fade_bottom">
                            <img src="images/client-6.png" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta__area">
            <div class="container line pb-110 dark-p">
                <div class="line-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content">
                            <p class="cta__sub-title">Work together</p>
                            <h2 class="cta__title title-anim">I would love to hear more about your
                                project</h2>
                            <div class="btn_wrapper">
                                <a href="contact" class="wc-btn-primary btn-hover btn-item">
                                    <span></span>Let us talk <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

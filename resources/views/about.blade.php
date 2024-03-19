@extends('layout.app')
<!-- Page content -->
@section('content')
    <main>
        <section class="hero__about">
            <div class="container g-0 line">
                <span class="line-3"></span>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="hero__about-content">
                            <h1 class="hero-title animation__word_come">About Me &<i> TechMates</i> </h1>
                            <div class="hero__about-info">
                                <div class="hero__about-btn">
                                    <div class="btn_wrapper">
                                        <a href="https://techmates.team/about" target="_blank" class="wc-btn-primary btn-hover btn-item">
                                            <span></span> About <br> Techmates <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="hero__about-text title-anim">
                                    <p>With a fusion of imaginative flair and strategic thinking, we
                                        strive to ignite substantial change and foster sustainable
                                        growth. Our consultative methodology for addressing your digital
                                        obstacles is reinforced by our commitment to involving you in
                                        every step of our collaborative journey.
                                    </p>
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
                            <h3 class="sec-title title-anim">My story</h3>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="story__text">
                                <p>Nestled in the picturesque mountains of India lies a dynamic IT
                                    development company with a passion for creating stunning digital
                                    experiences. Since 2014, this team of expert designers and
                                    developers have been crafting beautiful user interfaces and user
                                    experiences, developing powerful mobile applications, and building
                                    robust back-end systems. </p>
                                <p> Driven by a motto of "It is not the mountain we conquer but
                                    ourselves," this company is dedicated to pushing the boundaries of
                                    what's possible and delivering unparalleled customer satisfaction
                                    through the highest quality work. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="story__img-wrapper">
                            <img src="images/story-1.jpg" alt="Story Thumbnail" class="w-100">
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="story__img-wrapper img-anim">
                            <img src="images/story-2.jpg" alt="Story Thumbnail" data-speed="auto">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="story__img-wrapper">
                            <img src="images/story-3.jpg" alt="Story Thumbnail">
                            <img src="images/story-4.jpg" alt="Story Thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="counter__area">
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
        </section>
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

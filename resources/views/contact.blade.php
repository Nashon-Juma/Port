
@extends('layouts.main')
<!-- Page content -->
@section('content')
    <section class="contact__area-6">
        <div class="container g-0 line pt-120 pb-110">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="contact__text">
                        <p>Great! We're excited to hear from you and let's start something special togerter. call us for
                            any inquery.</p>
                    </div>
                </div>
            </div>
            <div class="row contact__btm">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="contact__info">
                        <div class="contact__title d-flex align-items-start">
                            <img src="images/kenya-flag.png">
                            <div>
                                <h3>Nairobi(HQ)</h3>
                                <p>Corporate Office </p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <p>3073-3074, Silver Business Point,</p>
                                <p>Near VIP Circle, Uttran,</p>
                                <p>Surat – 394105</p>
                                <p>Gujarat, India</p>
                            </li>
                            <li>
                                <p>
                                    <a href="tel:+91 – 94 268 88826">+91 94 268 88826</a>
                                </p>
                                <p>
                                    <a href="tel:+91 – 90 335 01370">+91 90 335 01370</a>
                                </p>
                            </li>
                            <li><br>
                                <a href="mailto:developer@jumaz.anonaddy.com">developer@jumaz.anonaddy.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="contact__info">
                        <div class="contact__title d-flex align-items-start">
                            <img src="images/kenya.png">
                            <div>
                                <h3>Kiambu</h3>
                                <p>Sales Office</p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <p>197 New Jersey 18,</p>
                                <p>East Brunswick,</p>
                                <p>NJ</p>
                            </li>

                            <li><br>
                                <a href="mailto:developer@jumaz.anonaddy.com">developer@jumaz.anonaddy.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="contact__form">
                            @if (session('success'))
                                <div id="success-message"
                                    style="
                                    padding: 15px;
                                    background-color: #fff;
                                    color: black;
                                    border-radius: 5px;
                                    margin-bottom: 15px;
                                    font-family: Arial, sans-serif;
                                    font-size: 16px;
                                    text-align: center;
                                    transition: opacity 0.5s ease-out;
                                    opacity: 1;
                                ">
                                    {{ session('success') }}
                                </div>

                                <script>
                                    setTimeout(function() {
                                        var messageElement = document.getElementById('success-message');
                                        messageElement.style.opacity = '0'; // Fade out effect
                                        setTimeout(function() {
                                            messageElement.style.display = 'none';
                                        }, 500);
                                    }, 20000);
                                </script>
                            @endif


                            <form action="{{ route('send.message') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-12">
                                        <input type="text" name="name" placeholder="Name *" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-12">
                                        <input type="email" name="email" placeholder="Email (Optional) *" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-xxl-6 col-xl-6 col-12">
                                        <input type="tel" name="phone" placeholder="Phone (Optional)" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-12">
                                        <input type="text" name="subject" placeholder="Subject *" value="{{ old('subject') }}">
                                        @error('subject')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <textarea name="message" placeholder="Messages *">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="btn_wrapper">
                                            <button class="wc-btn-primary btn-hover btn-item">
                                                <span></span> Send <br>Messages <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page content -->
@endsection

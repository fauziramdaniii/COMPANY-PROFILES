@extends('layouts.navbar')

@section('section')
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">

        <div class="slide kenburns" data-bg-image="template/images/slider/notgeneric_bg3.jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">

                    <h1>WELCOME TO THE WORLD OF POLO</h1>
                    <p>Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template
                        that can build any type of websites, and quite possibly the only one you will ever need.</p>
                    <div><a href="#welcome" class="btn scroll-to">Explore more</a></div>
                    </span>

                </div>
            </div>
        </div>


        <div class="slide" data-bg-video="video/pexels-waves.mp4">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-left text-light">

                    <h1>220+ Laytout Demos</h1>
                    <p class="text-small">POLO is packed with 220+ pre-made layouts that allow you to quickly
                        jumpstart your project. Completely customizable for creating your own designs.</p>
                    <div><a href="#welcome" class="btn scroll-to">Explore more</a></div>

                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container" id="welcome">
            <div class="heading-text heading-section text-center">
                <h2>SERVICES</h2>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plug"></i></a>
                        </div>
                        <h3>Powerful template</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-desktop"></i></a>
                        </div>
                        <h3>Flexible Layouts</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Fast processing</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-trophy"></i></a>
                        </div>
                        <h3>Unlimited Colors</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <h3>Premium Sliders</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-rocket"></i></a>
                        </div>
                        <h3>Modern Design</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-flask"></i></a>
                        </div>
                        <h3>Clean Modern Code</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-umbrella"></i></a>
                        </div>
                        <h3>Free Updates & Support</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="client" class="p-1">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>CLIENTS</h2>
                <span class="lead">Our awesome clients we've had the pleasure to work with! </span>
            </div>
            <div class="carousel client-logos" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2"
                data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay="3000" data-loop="true">
                <div>
                    <a href="#"><img alt="" src="template/images/clients/1.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/2.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/3.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/4.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/5.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/6.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/7.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/8.png"> </a>
                </div>
                <div>
                    <a href="#"><img alt="" src="template/images/clients/9.png"> </a>
                </div>
            </div>
        </div>
    </section>
@endsection

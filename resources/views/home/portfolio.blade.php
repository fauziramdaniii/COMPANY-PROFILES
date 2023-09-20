@extends('layouts.navbar')

@section('section')
    <section id="page-title" style="background-color:#7391ac; min-height:700px;">
        <div id="particles-dots" class="particles" style="background: none"></div>
        <div class="container">
            <div class="col-lg-7">
                <div class="text-left">
                    <div data-animate="fadeIn" class="text-light">
                        <h1>Guide To The World</h1>
                    </div>
                    <div class="portfolio-attributes style3 text-light">
                        <div class="attribute" data-animate="fadeInUp" data-animate-delay="800">
                            <strong>Client:</strong>Guide To The World
                        </div>
                        <div class="attribute" data-animate="fadeInUp" data-animate-delay="1000">
                            <strong>Website:</strong> <a href="http://inspiro-media.com/" title="Guide To The World"
                                target="_blank">inspiro-media.com</a>
                        </div>
                        <div class="attribute" data-animate="fadeInUp" data-animate-delay="1200">
                            <strong>Date:</strong> 2017-07-10
                        </div>
                        <div class="attribute" data-animate="fadeInUp" data-animate-delay="1400">
                            <strong>Services:</strong> Web Design
                        </div>
                    </div>
                    <div class="portfolio-share m-b-40" data-animate="fadeIn" data-animate-delay="1800">
                        <h4 class="text-light">Share this project</h4>
                        <div class="align-center">
                            <a class="btn btn-xs btn-light btn-slide" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-light btn-slide" href="#" data-width="100">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-light btn-slide" href="#" data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-light btn-slide" href="mailto:#" data-width="80">
                                <i class="icon-mail"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="project-description" data-animate="fadeIn" data-animate-delay="2200">
                    <h3 class="text-light">Guide To The World has the guts to design and develop the impossible.
                        With passion and a lot of expertise we create a surprisingly timeless collection of
                        beautiful functional furniture, made with innovative and sustainable materials. Our brand
                        represents connection.</h3>
                    <a href="#" class="btn btn-light btn-rounded">Visit Website</a>
                </div>
            </div>
        </div>
    </section>

    <section id="page-content" class="p-b-0">
        <div class="container">
            <div class="portfolio-content" data-lightbox="gallery">
                <a title="Saiba Chair" data-lightbox="gallery-image" href="template/images/portfolio/project/31.jpg">
                    <img src="template/images/portfolio/project/31.jpg" data-animate="fadeInUp">
                </a>
                <br>
                <br>
                <a title="Saiba Chair" data-lightbox="gallery-image" href="template/images/portfolio/project/32.jpg">
                    <img src="template/images/portfolio/project/32.jpg" data-animate="fadeInUp">
                </a>
                <br>
                <br>
                <a title="Saiba Chair" data-lightbox="gallery-image" href="template/images/portfolio/project/33.jpg">
                    <img src="template/images/portfolio/project/33.jpg" data-animate="fadeInUp">
                </a>
                <br>
                <br>
                <a title="Saiba Chair" data-lightbox="gallery-image" href="template/images/portfolio/project/34.jpg">
                    <img src="template/images/portfolio/project/34.jpg" data-animate="fadeInUp">
                </a>
            </div>
            <hr class="space">
            <div class="row m-b-40">
                <div class="col-lg-8 center">
                    <div class="project-description">
                        <h2>Project Info</h2>
                        <h3>Guide To The World has the guts to design and develop the impossible. With passion and a
                            lot of expertise we create a surprisingly timeless collection of beautiful functional
                            furniture, made with innovative and sustainable materials. Our brand represents
                            connection.</h3>
                    </div>
                    <div class="portfolio-attributes">
                        <div class="attribute"><strong>Client:</strong> Guide To The World</div>
                        <div class="attribute"><strong>Website:</strong> <a href="http://inspiro-media.com/"
                                title="Guide To The World" target="_blank">inspiro-media.com</a></div>
                        <div class="attribute"><strong>Date:</strong> 2017-09-01</div>
                        <div class="attribute"><strong>Services:</strong> Website Design, UX</div>
                    </div>
                    <div> <a href="#" class="btn btn-dark btn-outline">Visit Website</a></div>
                </div>
            </div>
        </div>
        <div class="post-navigation">
            <a href="#" class="post-prev">
                <div class="post-prev-title"><span>Previous Post</span>Woody Chair vel accumsan</div>
            </a>
            <a href="#" class="post-all">
                <i class="icon-grid"> </i>
            </a>
            <a href="#" class="post-next">
                <div class="post-next-title"><span>Next Post</span>Guide To The World</div>
            </a>
        </div>
    </section>
@endsection

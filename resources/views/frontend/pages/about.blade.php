<x-layout>
    @include('frontend.header')


            <!-- Page Banner Start -->
            <div class="section page-banner-area bg-cover" style="background-image: url(assets/images/banner-img.jpg);">
                <div class="container">
                    <!-- Page Banner Wrapper Start -->
                    <div class="page-banner-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Page Banner Content Start -->
                                <div class="page-banner text-center">
                                    <h2 class="title">About Us</h2>
                                    <ul class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ul>  
                                </div>
                                <!-- Page Banner Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Page Banner Wrapper End -->
                </div>
            </div>
            <!-- Page Banner End -->
    
            
            <!-- About Section Start -->
            <div class="section about-area section-padding-02">
                <div class="container">
                    <!-- About Wrapper Start -->
                    <div class="about-wrapper">
                        <div class="row">
                            <div class="col-lg-5 wow fadeInLeft"  data-wow-delay=".4s">
                                <!-- About Thumb Start -->
                                <div class="about-thumb">
                                    <img class="about-img-big wow fadeInLeft" data-wow-delay=".4s" src="assets/images/about/about-big.jpg" alt="Image">
                                    <img class="about-img-sm wow fadeInUp" data-wow-delay=".5s" src="assets/images/about/about-sm.jpg" alt="Image-2">
                                    <div class="play-video">
                                        <a class="popup-video big" href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk"><i class="flaticon-play"></i></a>
                                    </div>
                                   
                                </div>
                                <!-- About Thumb End -->
                            </div>
                            <div class="col-lg-7 wow fadeInRight" data-wow-delay=".4s">
                                <!-- About Content Start -->
                                <div class="about-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h4 class="sub-title wow fadeInRight" data-wow-delay=".3s">About the agency</h4>
                                        <h2 class="title wow fadeInRight" data-wow-delay=".5s">Professional Business Guidance Agency</h2>
                                    </div>
                                    <!-- Section Title End -->
                                    <p class="wow fadeInRight" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <!-- About List Start -->
                                    <ul class="about-list wow fadeInRight" data-wow-delay=".8s">
                                        <li><i class="flaticon-checked"></i>Affordable pricing & billing Plans</li>
                                        <li><i class="flaticon-checked"></i>Built with amazing featues</li>
                                        <li><i class="flaticon-checked"></i>Easy to edit & User friendly design.</li>
                                        <li><i class="flaticon-checked"></i>Amazing framework with free plans.</li>
                                    </ul>
                                    <!-- About List End -->
                                    <a class="main-btn wow fadeInUp" data-wow-delay=".9s" href="#">Get Started
                                        <span><i class="flaticon-right-arrow-angle"></i></span>
                                    </a>
                                </div>
                                <!-- About Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- About Wrapper End -->
                </div>
            </div>
            <!-- About Section End -->
    
           
    
            <!-- Question Section Start -->
            <div class="section question-area" style="background-image: url(assets/images/bg/question-bg.jpg);">
                <div class="container">
                    <!-- Question Wrapper Start -->
                    <div class="question-wrapper section-padding">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-8">
                                <!-- Question Content Start -->
                                <div class="question-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="title wow fadeInUp" data-wow-delay=".3s">Have You a Different Question?</h2>
                                    </div>
                                    <!-- Section Title End -->
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Please create a ticket to our support forum,a great place to learn, share, and troubleshoot. Get started. </p>
                                </div>
                                <!-- Question Content End -->
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <!-- Question Button Start -->
                                <div class="question-btn text-md-end">
                                    <a class="main-btn wow fadeInUp" data-wow-delay=".5s" href="#">Free Consulting
                                        <span><i class="flaticon-right-arrow-angle"></i></span>
                                    </a>
                                </div>
                                <!-- Question Button End -->
                            </div>
                        </div>
                    </div>
                    <!-- Question Wrapper End -->
                </div>
            </div>
            <!-- Question Section End -->
            @include('frontend.footer')

</x-layout>
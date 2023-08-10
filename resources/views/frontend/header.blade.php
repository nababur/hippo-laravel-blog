        <!-- Header Section Start -->
        <div class="section header-section">

            <!-- Header Top Start -->
            <div class="header-top d-none d-md-block">
                <div class="container">

                    <!-- Header Top Wrapper Start -->
                    <div
                        class="header-top-wrapper d-flex justify-content-center justify-content-md-between align-items-center">
                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <ul class="header-meta">
                                <li><a href="#"><i class="flaticon-envelope-2"></i> hello@gridtemplate.com</a>
                                </li>
                                <li><a href="#"><i class="flaticon-calendar-1"></i> Sun - Fri : 9.00 am to 18.pm
                                        (Sat Weekend)</a></li>
                                <li><a href="#"><i class="flaticon-call"></i> +88 018 522 369 36</a></li>
                            </ul>
                        </div>
                        <!-- Header Top Left End -->
                        <!-- Header Top Right Start -->
                        <div class="header-top-right">
                            <div class="header-follow">
                                <ul class="social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right End -->
                    </div>
                    <!-- Header Top Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom">
                <div class="container">

                    <!-- Header Bottom Wrapper Start -->
                    <div class="header-bottom-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="/assets/images/logo.png" alt="Logo"></a>
                        </div>
                        <!-- Header logo End -->

                        <div class="header-right">

                            <!-- Header Primary Menu Start -->
                            <div class="header-primary-menu d-none d-lg-block">
                                <ul class="nav-menu">
                                    <li><a href="/">Home </a></li>
                                    <li><a href="/about">About</a></li>
                                    
                                   
                                </ul>

                            </div>
                            <!-- Header Primary Menu End -->

                            <!-- Header Primary Menu Button Start -->

                            @auth
                                <div class="dashboard-menu">

                                
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button class="main-btn " type="submit">Welcome back, {{ auth()->user()->name }} ! Log Out <span><i class="flaticon-user"></i></span></button>
                                        
                                    </form>
                                    
                                    
                                   @admin
                                        
                                        <div class="sub-menu">
                                            <ul >
                                                <li><a href="/admin/posts" :active="request()->is('admin/posts')">Dashboard </a></li>
                                                <li><a href="/admin/posts/create":active="request()->is('admin/posts/create')">Create new post</a></li>
                                            
                                            </ul>
                                        </div>
                                    @endadmin
                                

                                </div>

                            @else
                                <div class="main-btn">
                                    <a  class="text-white" href="/register">
                                        Register /
                                    
                                    </a>
                                    <a  class="text-white" href="/login">
                                        Login
                                        <span><i class="flaticon-user"></i></span>
                                    </a>
                                </div>

                            @endauth
                                
                            {{-- @endif
                                <a class="main-btn d-none d-lg-block" href="/register">
                                    Register Now
                                    <span><i class="flaticon-user"></i></span>
                                </a>
                                
                            @endguest --}}
                            <!-- Header Primary Menu Button End -->


                        </div>


                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Bottom Wrapper End -->

                </div>
            </div>
            <!-- Header Bottom End -->

        </div>
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <a class="logo" href="index.html"><img src="/assets/images/logo.png" alt="Logo"></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <div class="mobile-menu">

                    <ul class="nav-menu">
                        <li><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Version 01</a></li>
                                <li><a href="index-2.html">Home Version 02</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <a href="service.html">Services</a>
                        </li>
                        <li>
                            <a href="case-study.html">Case Study</a>
                        </li>
                        <li>
                            <a class="active" href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li class="active"><a href="blog.html">Blog Grid</a></li>
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->

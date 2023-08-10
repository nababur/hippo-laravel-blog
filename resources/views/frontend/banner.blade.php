@props(['categories'])

<!-- Page Banner Start -->
<div class="section page-banner-area bg-cover" style="background-image: url(/assets/images/banner-img.jpg);">
    <div class="container">
        <!-- Page Banner Wrapper Start -->
        <div class="page-banner-wrapper">

            @if (\Request::is('/'))  
                <div class="row justify-content-center align-items-center page-banner text-center">
                    <div class="col-lg-4">
                        <div class="search-category">

                        
                            <x-category-dropdown/>




                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="search-input">
                            <form action="/" method="GET">
                                @if (request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                <input name="search" type="search" placeholder="Search here" value="{{ request('search') }}">
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Banner Content Start -->
                        <div class="page-banner text-center">

                            {{ Breadcrumbs::render('posts', $post) }}

                            {{-- <h2 class="title">Contact Us</h2>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ul> --}}
                        </div>
                        <!-- Page Banner Content End -->
                    </div>
                </div>
            @endif


        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<!-- Page Banner End -->

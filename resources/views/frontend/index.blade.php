<x-layout>


    @include('frontend.header')
    @include('frontend.banner')

    @if ($posts->count())
        <x-posts-grid :posts="$posts" />

        {{-- {{ $posts->links() }} --}}
    @else
        

        <!-- Blog Section Start -->
        <div class="section blog-area section-padding">
            <div class="container">
                <!-- Blog Wrapper Start -->
                <div class="blog-wrapper blog-grid-wrapper">

                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <p class="text-center">No posts yet. Please check back later.</p>
                        </div>

                        <div class="col-lg-3">
                            <a class="main-btn mt-4 d-lg-block" href="/">Back to home
                                <span><i class="flaticon-right-arrow-angle"></i></span>
                            </a>
                        </div>

                    </div>

       
                </div>
                <!-- Blog Wrapper End -->
            </div>
        </div>
        <!-- Blog Section End -->

    @endif



    <x-subscribe></x-subscribe>

    @include('frontend.footer')




</x-layout>

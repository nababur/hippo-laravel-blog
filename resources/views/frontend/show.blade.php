<x-layout>

    @include('frontend.header')
    @include('frontend.banner')

    <!-- Blog Standard Area start -->
    <div class="section blog-standard-area section-padding">
        <div class="container">
            <div class="blog-details-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-post">
                            <!-- Blog Details Thumb start -->
                            <div class="blog-details-thumb">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
                            </div>
                            <!-- Blog Details Thumb End -->
                            <!-- Blog Details Content start -->
                            <div class="blog-details-content">
                                <!-- Blog Post Meta start -->
                                <div class="blog-post-meta">
                                    <span><i class="flaticon-user"></i>
                                        Author: <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    </span>
                                    <span><i class="flaticon-calendar"></i>
                                        Date: {{ $post->created_at->diffForHumans() }}</span>
                                    
                                        @if(isset($post->category->name))
                        
                    
                                        <span><a href="/?category={{ $post->category->slug }}"><i class="flaticon-message">
                                        </i>
                                        Category: {{ $post->category->name }}</a></span>
                    
                                        @endif

                                    

                                </div>
                                <!-- Blog Post Meta End -->
                                <h3 class="title">{{ $post->title }}</h3>
                                <!-- Blog Details Text Start -->
                                <div class="blog-details-text">
                                    {!! $post->body !!}

                                    <!-- Blog Inner Text End -->
                                </div>
                                <!-- Blog Details Text End -->
                                <!-- Blog Details Share start -->
                                <div class="blog-details-share">
                                    <span class="share-title">Share: </span>
                                    <ul class="social">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                        <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Blog Details Share End -->
                            </div>
                            <!-- Blog Details Content End -->
                        </div>





                        <!-- Blog Details Comments Start -->
                        <div class="blog-details-comments">

                            <!-- Blog Details Comments Title Start -->
                            <div class="comment-title">
                                <h4 class="title">{{ $total = $post->comments->count() }} Comments</h4>
                            </div>
                            <!-- Blog Details Comments Title End -->
                            <ul>

                                @foreach ($post->comments as $comment)
                                <x-post-comments :comment="$comment"/>
                                    
                                @endforeach
                            </ul>

                         
                        </div>
                        <!-- Blog Details Comments End -->



                        <div class="blog-form">
                            @auth
                                
                                <!-- Blog Details Comments Title Start -->
                                <div class="comment-title">
                                    <h4 class="title">Leave Your Comments</h4>
                                </div>
                                <!-- Blog Details Comments Title End -->
                                <!-- Blog Details Form Start -->
                            
                                @include('frontend.coment-form')
                                <!-- Blog Details Form End -->
                            @else
                                <p class="font-semibold">
                                    <a style="color: #f31717" href="/register" class="hover:underline">Register</a> or <a style="color: #f31717" href="/login" class="hover:underline">Login  </a>
                                    to leave a Comment.
                                </p>
                            @endauth
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-posts-sidebar :categories="$categories" :post="$post" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Standard Area End -->


    @include('frontend.footer')

</x-layout>

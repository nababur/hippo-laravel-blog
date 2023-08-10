@props(['post'])

<div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
    <!-- Single Blog Start -->
    <div class="single-blog">
        <!-- Blog Image Start -->
        <div class="blog-img">
            <a href="/posts/{{ $post->slug }}"> <img src="{{ asset('storage/' . $post->thumbnail) }}" alt=""></a>
        </div>
        <!-- Blog Image End -->
        <!-- Blog Meta Start -->
        <div class="blog-meta">
            <div class="author">
                <div class="author-img">
                    <img src="/assets/images/blog/blog-sm.jpg" alt="">
                </div>
                <div class="author-text">
                   

                    
                    @if(isset($post->author->username))
                        
                    <h4 class="name"><a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    </h4>

                    @endif


                    @if(isset($post->category->name))
                        
                    
                    <span class="cat">Category: <a href="/?category={{ $post->category->slug }}">
                            {{ $post->category->name }}</a></span>

                    @endif


                </div>
            </div>
            <div class="meta-cat">

                <span class="date">{{ $post->created_at->diffForHumans() }}</span>
            </div>
        </div>
        <!-- Blog Meta End -->
        <!-- Blog Content Start -->
        <div class="blog-content">
            <h4 class="title"> <a href="/posts/{{ $post->slug }}">{!! Str::words("$post->title", 5, ' ...') !!}</a>
            </h4>
            <a class="main-btn" href="/posts/{{ $post->slug }}">View More
                <span><i class="flaticon-right-arrow-angle"></i></span>
            </a>
        </div>
        <!-- Blog Content End -->
    </div>
    <!-- Single Blog End -->
</div>

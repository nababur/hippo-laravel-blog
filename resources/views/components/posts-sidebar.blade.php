@props(['categories', 'post'])
<!-- Blog Sidebar start -->
<div class="blog-sidebar">


    <!-- Sidebar Widget Start -->
    <div class="sidebar-widget">
        <!-- Widget Title Start -->
        <div class="widget-title">
            <h3 class="title">Categories</h3>
        </div>
        <!-- Widget Title End -->



        <!-- Widget Category Start -->
        <ul class="category">
            @foreach ($categories as $category)
                <li><a href="/?category={{ $post->category->slug }}">{{ $category->name }} </a>
                </li>
            @endforeach

        </ul>
        <!-- Widget Category End -->
    </div>
    <!-- Sidebar Widget End -->


</div>
<!-- Blog Sidebar End -->

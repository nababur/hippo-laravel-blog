@props(['posts'])


<!-- Blog Section Start -->
<div class="section blog-area section-padding">
    <div class="container">
        <!-- Blog Wrapper Start -->
        <div class="blog-wrapper blog-grid-wrapper">

            <div class="row">






                @foreach ($posts as $post)
                    <x-post-card :post="$post" />
                @endforeach



               



            </div>


            {{ $posts->links() }}


        </div>
        <!-- Blog Wrapper End -->
    </div>
</div>
<!-- Blog Section End -->

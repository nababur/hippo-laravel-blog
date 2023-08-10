@props(['comment'])


<li>
    <!-- Blog Single Comments Start -->
    <div class="single-comment">
        <div class="comment-thumb">
            <img src="https://i.pravatar.cc/80?u={{ $comment->user_id }}" alt="">
        </div>
        <div class="comment-content">
            <div class="author-name">
                <h5 class="name" style="text-transform: capitalize">{{ $comment->author->username }}</h5>
                <span class="date">{{ $comment->created_at->diffForHumans(); }}</span>
                {{-- <a class="reply" href="#"><i class="flaticon-reply"></i>
                    Reply</a> --}}
            </div>
            <p>{{ $comment->body }}</p>
        </div>
    </div>
    <!-- Blog Single Comments End -->

</li>

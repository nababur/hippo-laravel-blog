

<form method="POST" action="/posts/{{ $post->slug }}/comments">
    @csrf
    <div class="row">
        {{-- <div class="col-lg-6">
            <div class="single-form">
                <label>Your Name :</label>
                <input type="text">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-form">
                <label>Email Address :</label>
                <input type="email">
            </div>
        </div> --}}
        <div class="col-lg-12">
            <div class="single-form">
                <label>Write a message :</label>
                <textarea name="body">Quick, thing of something to say!</textarea>
            </div>
            @error('body')
                <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror


        </div>
        <div class="col-lg-12">
            <div class="comment-btn">
                <x-forms.button>Post comment</x-forms.button>
            </div>
        </div>
    </div>
</form>
<x-layout>


    @include('frontend.header')



        <!-- Blog Section Start -->
        <div class="section blog-area section-padding pt-3" style="border-top:1px solid#efefef">
            <div class="container">
                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper">
                        <div class="row contact-form-inner justify-content-center">
                            

                            
                            <x-settings>


                                <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')
                        
                        
                                        <div class="col-md-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form text-center">
                                               <h3>Edit post : {{ $post->title }}</h3>
                                            </div>
                                            <!-- Single Form End -->
                                         
                                        </div>
                        
                                        <x-forms.input name="title" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" id='' :value="$post->title"/>
                                           
                                        <x-forms.input name="slug" onload="" onkeyup="" id="slug-title" :value="$post->slug"/>
                        
                                        <x-forms.input name="excerpt" onload="" onkeyup="" id="" :value="$post->excerpt"/>
                        
                                        <x-forms.textarea name="content">{{ old('body', $post->body) }} </x-forms.textarea>
                                      
                                        <x-forms.input name="thumbnail" type="file" onload="" onkeyup="" id="" :value="old('thumbnail', $post->thumbnail)"/>
                                            <img class="img-thumbnail mt-2" width="100" height="auto" src="{{ asset('storage/' . $post->thumbnail) }}" alt=""
                                            class="rounded-xl ml-6">
                                      
                                        <div class="col-md-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form clearfix">
                                                <label for="catgory_id">Category</label>
                                                <select class=" w-100" id="category_id"  name="category_id" aria-label="Select category">
                                                    <option selected>Select your post category</option>
                                                    
                                                    @foreach (\App\Models\Category::all() as $category)
                                                        <option 
                                                        value="{{ $category->id }}" 
                                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                                            {{ ucwords($category->name) }}
                                                        </option>
                                                    @endforeach
                        
                                                   
                                                </select>
                                            </div>
                                            <!-- Single Form End -->
                                         
                        
                                        </div>
                                       
                                        <div class="col-md-12">
                                           
                                            <!-- Single Form Start -->
                                            <div class="contact-btn">
                                                <x-forms.button>Update post</x-forms.button>
                                            </div>
                                            <!-- Single Form End -->
                                            <x-success-flash/>
                                        </div>
                                 
                                </form>







                            </x-settings>
                   
                        </div>
                    </div>
                    <!-- Contact Form Wrapper End -->
            </div>
        </div>
        <!-- Blog Section End -->





    <x-subscribe></x-subscribe>

    @include('frontend.footer')




</x-layout>

<script>

    /* Encode string to slug */
    function convertToSlug( str ) {
        
        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
                .toLowerCase();
        
        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm,'');
        
        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');   
        document.getElementById("slug-title").value = str;
        //return str;
    }

</script>